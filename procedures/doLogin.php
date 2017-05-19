<?php
  require_once __DIR__ . '/../inc/bootstrap.php';

  // Find the user with the input email in database
  $user = findUserByEmail(request()->get('email'));

  // If the user with input email is not exit, redirect to login page.
  if (empty($user)) {
    // Redirect to login.php and show error message
    $session->getFlashBag()->add('error', 'Email address was not found, please try again.');
    redirect('../login.php');
  }

  // Check if the password is match.
  // Because the password is hashed, we need to use the password_verify function to check
  if (!password_verify(request()->get('password'), $user['password'])) {

    // If passwords do not match, redirect to login.php and show error message
    $session->getFlashBag()->add('error', 'Password is incorrect, please try again.');
    redirect('../login.php');
  }

  // Expire time for cookies
  $expTime = time() + 3600;

  // JSON Web Token (JWT) is a compact, URL-safe means of representing claims to be transferred between two parties.
  // JWT::encode() will take care of everything (transforming the array to JSON, producing the headers, signing the payload and encoding the final string).
  $jwt = \Firebase\JWT\JWT::encode([
    'iss' => request()->getBaseUrl(),     // Issuer -	Who issues this claim?
    'sub' => "{$user['memberID']}",       // Subject - Who is the subject?
    'exp' => $expTime,                    // Expiration Time - When this JWT expires
    'iat' => time(),                      // Issued At -	Seconds since epoch
    'nbf' => time(),                      // Not Before -	Seconds since epoch
    'is_admin' => $user['role_id'] == 1   // Private Claim Data -	Is the user an Admin?
  ], getenv("SECRET_KEY"), 'HS256');      // Get SECRET_KEY in the .env file and use HS256 algorithm. Only HMAC SHA-256 ("HS256") and "none" MUST be implemented by conforming JWT implementations

  // An access token contains the security credentials for a login session and identifies the user, the user's groups, the user's privileges, and, in some cases, a particular application.
  $accessToken = new Symfony\Component\HttpFoundation\Cookie('access_token', $jwt, $expTime, '/', getenv('COOKIE_DOMAIN'));

  // Add success meassage
  $session->getFlashBag()->add('success', 'Login success.');
  // Redirect to homepage with cookies
  redirect('../index.php', ['cookies' => [$accessToken]]);

	?>
