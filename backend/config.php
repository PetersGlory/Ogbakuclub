<?php
error_reporting("E_RROR");
session_start();
$server = "localhost";
// $user = "wakakava_ogbakuclub"; //
// $password = "Ogbakuclub@1"; //
// $db = "wakakava_ogbakuclub";//
$user = "root";
$password = "";
$db="ogbakuclub";

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
  // code...
  die("Error connecting ". $conn->connect_error);
}
// echo "Successfully connected";

 ?>
