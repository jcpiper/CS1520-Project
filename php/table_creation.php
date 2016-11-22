<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 11/22/2016
 * Time: 2:38 PM
 */
// this script is only to be used to set up the db

// otherwise, it is to remain in the server for use when needed

$host = 'localhost';
$userName = 'root';
$pass = '';
$db = 'ReadingList';

$connection = new mysqli($host, $userName, $pass, $db);

//check connection
if($connection->connect_error):
  die('DB connection failed: ' . $connection->connect_error);
endif;


$drop = "Drop table books";

if($connection->query($drop)===true):
  echo "Table dropped\n";
endif;

$table = "Create table books(
  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50) not null,
  genre VARCHAR(25),
  author_firstName VARCHAR(20),
  author_lastName VARCHAR(20)
)";

if ($connection->query($table) === true):
  echo "Books table created";
else:
  echo "Table failed to build" . $connection->error;
endif;