<?php
  require __DIR__ . '/inc/bootstrap.php';
  requireAuth();
  require_once __DIR__ . '/inc/header.php';

  // if (!isAdmin() && !isOwner($post['owner_id'])) {
  //   $session->getFlashBag()->add('error', 'Not Anthorized');
  //   redirect('posts-list.php');
  // }
?>

<section class="add-post">
  <div id="add">

  </div>
  <div class="container">
    <h1 class="text-center">Add a post</h1>
    <div class="well">
      <!-- Display messages -->
      <?php echo display_success(); ?>
      <?php echo display_errors(); ?>

      <!-- action="procedures/addPost.php to execute addPost() in addPost.php -->
      <form class="form-horizontal" method="post" action="procedures/addPost.php">
        <?php include __DIR__ . '/inc/postForm.php'; ?>
      </form>
    </div> <!-- /well -->
  </div> <!-- /container -->

</section>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
