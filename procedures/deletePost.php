<?php
  require_once __DIR__ . '/../inc/bootstrap.php';
  requireAuth();

  // Function getPost() gets the post base on postId and assign the value to variable $post
  $post = getPost(request()->get('postId'));

  // Only admin and post's owner can delete post
  if (!isAdmin() && !isOwner($post['owner_id'])) {
    // Show message and redirect
    $session->getFlashBag()->add('error', 'Not Anthorized');
    redirect('../posts-list.php');
  }

  // Call deletePost($postId) function to delete a post base on postID
  deletePost($post['postID']);
  // Show message and redirect
  $session->getFlashBag()->add('success', 'Post is deleted.');
  redirect('../posts-list.php');
?>
