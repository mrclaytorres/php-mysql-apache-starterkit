<?php
  require_once __DIR__ . '/vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  function connect_mysql() {

    // Accessing environment variables
    $dbUser = $_ENV['DB_USER'];
    $dbPassword = $_ENV['DB_PASSWORD'];
    $dbName = $_ENV['DB_NAME'];

    $connection = mysqli_connect(
      'db', # service name
      $dbUser, # db user
      $dbPassword, # db password
      $dbName, # db name
    );

    return $connection;
  }