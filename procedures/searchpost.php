<?php
  require_once __DIR__ . '/../inc/bootstrap.php';
  requireAuth();

  // Access values from database column name
  $post = getPostByName(request()->get('name'));

  if(empty($post))
  {
    $session->getFlashBag()->add('error', 'Post '.request()->get('name').' not found');
    redirect('../search.php#result');
  }
  else {
    $_SESSION['search'] = $post;
    redirect('../search_results.php#result');
  }
 ?>
