<?php
session_start();
   $DB_SERVER="localhost:3306";
   $DB_USERNAME="root";
   $DB_PASSWORD="";
   $DB_DATABASE="owl-lawyer";
   $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
   if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
?>