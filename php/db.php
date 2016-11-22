<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 11/20/2016
 * Time: 4:03 PM
 */
$host = 'localhost';
$userName = 'root';
$pass = '';
$db = 'ReadingList';

$connection = new mysqli($host, $userName, $pass, $db);

//check connection
if($connection->connect_error):
  die('DB connection failed: ' . $connection->connect_error);
endif;


//$drop = "Drop table books";
//
//if($connection->query($drop)===true):
//  echo "Table dropped\n";
//endif;
//
//$table = "Create table books(
//  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  title VARCHAR(50) not null,
//  genre VARCHAR(10),
//  author_firstName VARCHAR(20),
//  author_lastName VARCHAR(20)
//)";
//
//if ($connection->query($table) === true):
//  echo "Books table created";
//else:
//  echo "Table failed to build" . $connection->error;
//endif;

