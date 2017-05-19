<?php
  require_once __DIR__ .'/../inc/bootstrap.php';
  requireAuth();

  // Get value from postId, title and description
  $postId = request()->get('postId');
  $postTitle = request()->get('title');
  $postDescription = request()->get('description');

  try {
    // Call function updatePost() to add new value to postId, title and description
    $newPost = updatePost($postId, $postTitle, $postDescription);

    // Show success message and redirect
    $session->getFlashBag()->add('success', 'Post is updated.');
    redirect('../posts-list.php');

  } catch (\Exception $e) {
      // Show success message and redirect
      $session->getFlashBag()->add('error', 'Unable to update post.');
      redirect('../edit.php?postId='.$postId);
  }
?>
