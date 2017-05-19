<?php
  require_once __DIR__ . '/inc/bootstrap.php';
  requireAuth();
  require_once __DIR__ . '/inc/header.php';
?>

<!-- REGISTER SECTION -->
<section class="register">
  <div class="container ">
    <!-- Change Password Form -->
    <form class="form-signin" method="POST" action="procedures/changePassword.php">
      <h1 class="form-signin-heading">My Account</h1>

      <div class="well">
        <h3>Change Password</h3>
        <!-- Display messages -->
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>

        <label for="inputCurrentPassword">Current Password:</label>
        <input type="password" id="inputCurrentPassword" name="current_password" class="form-control" placeholder="Current Password" required autofocus>

        <label for="inputPassword">New Password:</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="New Password" required>

        <label for="inputPassword">Confirm New Password:</label>
        <input type="password" id="inputPassword" name="confirm_password" class="form-control" placeholder="Confirm New Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
      </div> <!-- /well -->
    </form>
  </div> <!-- /container -->
</section>


<?php require_once __DIR__ . '/inc/footer.php'; ?>
