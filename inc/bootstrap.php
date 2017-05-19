<?php
  require_once __DIR__ . '/../vendor/autoload.php';
  require_once __DIR__ . '/functions.php';
  require_once __DIR__ . '/config.php';

  // Enables you to load environment variables from multiple .env files at multiple locations
  // This package is a work that derived form the package published by vlucas/phpdotenv and it adds functionality to handle multiple .env files.
  $dotenv = new Dotenv\Dotenv(__DIR__);
  $dotenv->load();

  // User Session for Flash message
  // Source: http://symfony.com/doc/current/components/http_foundation/sessions.html
  $session = new \Symfony\Component\HttpFoundation\Session\Session();
  $session->start();
?>
