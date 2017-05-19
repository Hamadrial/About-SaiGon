<?php
  require_once __DIR__ . '/../inc/bootstrap.php';
  requireAuth();

  $currPassword = request()->get('current_password');
  $newPassword = request()->get('password');
  $confirmPassword = request()->get('confirm_password');

  if ($newPassword != $confirmPassword) {
    $session->getFlashBag()->add('error', 'New password do not match, please try again.');
    redirect('../account.php');
  }

  // Start to find user
  $user = findUserByAccessToken();

  // If cannot find user
  if (empty($user)) {
    $session->getFlashBag()->add('error', 'Some Error Happened. Try again. If it continues, please log out and log back in.');
    redirect('../account.php');
  }

  // If current password is wrong
  if (!password_verify($currPassword, $user['password'])) {
    $session->getFlashBag()->add('error', 'Current password is incorrect. please try again.');
    redirect('../account.php');
  }

  // Make new password hash
  $updated = updatePassword(password_hash($newPassword, PASSWORD_DEFAULT), $user['memberID']);

  if (!$updated) {
    $session->getFlashBag()->add('error', 'Could not update password. Please try again.');
    redirect('../account.php');
  }

  $session->getFlashBag()->add('success', 'Password updated.');
  redirect('../account.php');
?>
