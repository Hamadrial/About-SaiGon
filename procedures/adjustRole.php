<?php
  require_once __DIR__ . '/../inc/bootstrap.php';
  requireAdmin();

  $userId = request()->get('userId');
  $role = request()->get('role');

  switch (strtolower($role)) {
    case 'promote':
      promote($userId);
      $session->getFlashBag()->add('success', 'Promoted to Admin');
      break;

    case 'demote':
      demote($userId);
      $session->getFlashBag()->add('success', 'Demoted to Admin');
      break;

    default:
      # code...
      break;
  }
  redirect('../admin.php');
?>
