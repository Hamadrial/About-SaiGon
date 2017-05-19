<?php
	require_once __DIR__ . '/title.php';
  require_once __DIR__ . '/config.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo $title; ?></title>

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css?version=3.1">
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="img/font-awesome-4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- HEADER SECTION -->
    <header>
      <div class="container-fluid">
        <div class="logo">
          <p><a href="index.php"><img src="img/logo.png" /></a></p>
        </div>
      </div>

	<?php if (!isAuthenticated()) : ?>

  <div class="container">
    <div class="row">
      <div class="secondline">
        <div class="col-sm-4">
          <p><a href="index.php">Home</a></p>
        </div>
        <div class="col-sm-4">
          <p><a href="register.php">Register</a></p>
        </div>
        <div class="col-sm-4">
          <p><a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>

<?php elseif (isAdmin()) : ?>
  <div class="container">
    <div class="row">
      <div class="secondline">
        <div class="col-sm-2">
          <p><a href="index.php">Home</a></p>
        </div>
				<div class="col-sm-2">
					<p><a href="search.php#result">Search</a></p>
				</div>
        <div class="col-sm-2">
          <p><a href="posts-list.php#posts">Posts List</a></p>
        </div>
        <div class="col-sm-2">
          <p><a href="add.php#add">Add Post</a></p>
        </div>
        <div class="col-sm-2">
          <p><a href="admin.php#admin">Admin<br></a></p>
					<p><a href="account.php">My account</a></p>
        </div>
        <div class="col-sm-2">
          <p><a href="procedures/doLogout.php">Log out</a></p>
        </div>
      </div>
    </div>
  </div>

<?php else : ?>
  <div class="container">
    <div class="row">
      <div class="secondline">
        <div class="col-sm-2">
          <p><a href="index.php">Home</a></p>
        </div>
				<div class="col-sm-2">
					<p><a href="search.php#result">Search</a></p>
				</div>
        <div class="col-sm-2">
          <p><a href="posts-list.php#posts">Posts List</a></p>
        </div>
        <div class="col-sm-2">
          <p><a href="add.php#add">Add Post</a></p>
        </div>
        <div class="col-sm-2">
					<p><a href="account.php">My account</a></p>
        </div>
        <div class="col-sm-2">
          <p><a href="procedures/doLogout.php">Log out</a></p>
        </div>
      </div>
    </div>
  </div>


	<?php endif; ?>

      </div>


    </header>
