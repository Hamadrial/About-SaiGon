
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
            <div class="first">
              <h4 class="head">About</h4>
              <p><a href="about.php">Saigon Team</a></p>
            </div> <!-- /first -->
          </div> <!-- /col-md-3 -->

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="second">
              <h4 class="head">Member Support</h4>
              <p><a href="contact.php">Contact Us</a></p>
              <?php if (!isAuthenticated()) : ?>
              <p><a href="register.php">Sign Up</a></p>
              <?php endif; ?>
            </div> <!-- /second -->
          </div> <!-- /col-md-4 -->

          <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="third">
              <h4 class="head">Follow Us</h4>

              <div class="social">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </div> <!-- /social -->

              <!-- <div class="signup">
                <form class="" action="" method="post" class="form">
                  <input type="text" name="email" value="" placeholder="Enter your email..." class="input">
                  <button type="button" name="go" class="button">GO!</button>
                </form>
              </div> --> <!-- /sign up -->
            </div> <!-- /third -->
          </div> <!-- /col-md-3 -->
        </div> <!-- /row -->
      </div> <!-- /container-fluid -->

      <div class="container-fluid">
        <div class="copyright">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; <?php echo date('Y'); ?> Company</p>
            </div> <!-- /col-md-12 -->
          </div> <!-- /row -->
        </div> <!-- /copyright -->
      </div> <!-- /container-fluid -->
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
