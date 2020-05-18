<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=aceinthehole_db', 'josevale_aith', 'myP7ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}