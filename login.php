<?php
  require_once __DIR__ . '/inc/bootstrap.php';
  require_once __DIR__ . '/inc/header.php';
?>

<!-- LOGIN SECTION -->
<section class="register">
  <div class="container">
    <!-- Registration Form -->
    <form class="form-signin" method="POST" action="procedures/doLogin.php">
        <h1 class="form-signin-heading">Please sign in</h1>
        <div class="well">
          <!-- Error message -->
          <?php echo display_errors(); ?>
          <?php echo display_success(); ?>

          <label for="inputEmail">Email address:</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

          <label for="inputPassword">Password:</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password..." required>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <!-- <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a> -->
        </div> <!-- /well -->
      </form>
  </div> <!-- /container -->
</section>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
