<?php
  require __DIR__ . '/inc/bootstrap.php';
  requireAuth();

  require_once __DIR__ . '/inc/header.php';
?>

<section class="posts-list">
  <div id="posts">

  </div>
  <div class="container">
    <h1 class="text-center">Posts List</h1>
    <div class="">
      <!-- Display messages -->
      <?php echo display_errors(); ?>
      <?php echo display_success(); ?>

      <?php
        foreach (getAllPosts() as $post) {
          include __DIR__ . '/inc/post.php';
        }
      ?>
    </div> <!-- /well -->
  </div> <!-- /container -->
</section>


<?php require_once __DIR__ . '/inc/footer.php'; ?>
