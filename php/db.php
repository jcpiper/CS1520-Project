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