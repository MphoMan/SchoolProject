<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$con = mysqli_connect($host, $username, $password, $database);
  if(!$con){
  	die("Database connection error: ".mysqli_connect_error());
  }
?>