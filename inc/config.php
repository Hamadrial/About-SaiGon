<?php
try {
  $db = new PDO( 'mysql:host=localhost; dbname=blog', 'root', '' );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( \Exception $e ) {
    echo 'Error connecting to the Database: ' . $e->getMessage();
    exit;
}

//set timezone
date_default_timezone_set('Europe/Helsinki');
?>
