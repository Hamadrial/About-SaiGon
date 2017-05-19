<?php
  require_once __DIR__ . '/../inc/bootstrap.php';

  $username = request()->get('username');
  $email = request()->get('email');
  $password = request()->get('password');
  $confirmPassword = request()->get('confirm_password');

  // Check whether password is typed the same
  if ($password != $confirmPassword) {
    $session->getFlashBag()->add('error', 'Passwords do not match, please try again.');
    redirect('../register.php');
  }

  // Find user by email
  $user = findUserByEmail($email);
  // Check, if there is an user with the same email address in the database, redirect to register.php.
  if (!empty($user)) {
    $session->getFlashBag()->add('error', 'An user with this email address is registered. Please go to log in or try again with another email address.');
    redirect('../register.php');
  }

  $hashed = password_hash($password, PASSWORD_DEFAULT);
  // Call createUser function to create user with $email and password is $hashed.
  $user = createUser($username, $email, $hashed);
  // Redirect to login page
  $session->getFlashBag()->add('success', 'Register success. Welcome to our page.');
  redirect('../login.php');

?>
