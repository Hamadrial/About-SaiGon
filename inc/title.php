<?php
// Take The filename of the currently executing script, relative to the document root.
// For instance, $_SERVER['PHP_SELF'] in a script at the address http://example.com/foo/bar.php would be /foo/bar.php.
$fullURL = $_SERVER['PHP_SELF'];

// Take only the name after '/'
$tmp = explode('/', $fullURL);
$pageTitle = end($tmp);

// Display page title acording to acive page
switch ($pageTitle) {
  case 'index.php':
    $title = "Home page";
    break;

  case 'login.php':
    $title= 'Login';
    break;

  case 'about.php':
    $title= 'About Us';
    break;

  case 'contact.php':
    $title= 'Contact Us';
    break;

  case 'register.php':
    $title= 'Register';
    break;

  case 'add.php':
    $title= 'Add A Post';
    break;

  case 'posts-list.php':
    $title= 'Posts List';
    break;

  case 'account.php':
    $title= 'My Account';
    break;

  case 'admin.php':
    $title= 'Admin Panel';
    break;

  case 'edit.php':
    $title= 'Update Post';
    break;

  case 'search.php':
    $title= 'Search';
    break;

  default:
    $title= 'TODO default name';
    break;
}
?>
