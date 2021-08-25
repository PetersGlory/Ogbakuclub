<?php
error_reporting("E_RROR");
$server = "localhost";
$user = "wakakava_ogbakuclub"; //
$password = "Ogbakuclub@1"; //
$db = "wakakava_ogbakuclub";//

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
  // code...
  die("Error connecting ". $conn->connect_error);
}
// echo "Successfully connected";

 ?>
