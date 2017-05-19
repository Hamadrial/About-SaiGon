<?php
  require_once __DIR__ . '/../inc/bootstrap.php';
  requireAuth();

  // Access values from database column title and description
  $postTitle = request()->get('title');
  $postDescription = request()->get('description');

  try {
    // Call function addPost() to add new value to title and description
    $newPost = addPost($postTitle, $postDescription);

    // Display message and redirect
    $session->getFlashBag()->add('success', 'Post Added.');
    redirect('../posts-list.php');

  } catch (\Exception $e) {
      // Display message and redirect
      $session->getFlashBag()->add('error', 'Unable to add post.');
      redirect('../add.php');
  }
 ?>
