<?php
  require_once __DIR__ . '/inc/bootstrap.php';
  require_once __DIR__ . '/inc/header.php';
?>

<!-- REGISTER SECTION -->
<section class="register">
  <div class="container">
    <!-- Registration Form -->
    <form class="form-signin" method="POST" action="procedures/doRegister.php">
      <h1 class="form-signin-heading">Registration</h1>
      <div class="well">
        <!-- Display messages -->
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>

        <label for="inputUsername">Username:</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>

        <label for="inputEmail">Email address:</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword">Password:</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

        <label for="inputPassword">Confirm Password:</label>
        <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Confirm Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </div> <!-- /well -->
    </form>
  </div> <!-- /container -->
</section>


<?php require_once __DIR__ . '/inc/footer.php'; ?>
