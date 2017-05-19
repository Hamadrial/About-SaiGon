<?php
  require __DIR__ . '/inc/bootstrap.php';
  requireAuth();

  require_once __DIR__ . '/inc/header.php';
?>

<section class="posts-list">
  <div class="container">
    <h1 class="text-center">Search Results</h1>
    <div class="">
      <div id='result'>
      <?php if (isset($_SESSION['search'])) : ?>
        <?php foreach ($_SESSION['search'] as $post) : ?>
            <?php     include __DIR__ . '/inc/post.php'; ?>
        <?php endforeach; ?>
<?php endif; ?>
</div>
</div> <!-- /well -->
</div> <!-- /container -->
</section>


<?php unset($_SESSION['search']); ?>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
