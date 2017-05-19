<?php
  require __DIR__ . '/../inc/bootstrap.php';
  requireAuth();

  $vote = request()->get('vote');
  $postId = request()->get('postId');

  if (!clearVote($postId)) {
    switch (strtolower($vote)) {
      case 'up':
        vote($postId, 1);
        break;

      case 'down':
        vote($postId, -1);
        break;
    }
  }

  redirect('../posts-list.php');
?>
