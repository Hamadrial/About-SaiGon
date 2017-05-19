<?php
  require_once __DIR__ . '/inc/bootstrap.php';
  require_once __DIR__ . '/inc/header.php';
?>
<section class="search">
  <h1 class="text-center">Search</h1>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">  </div>
      <div class="col-sm-7">
        <form class="search" action="procedures/searchpost.php" method="get">
          <div class="form-group" style="margin-top:10px; display:inline-block;">
            <input type="text" name='name' class="form-control" placeholder="Search" style="width: 40em">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
          <div id='result'>
            <?php echo display_errors(); ?>
          </div>
        </form>
      </div>


    </div>
  </div>

</section>


<?php require_once __DIR__ . '/inc/footer.php'; ?>
