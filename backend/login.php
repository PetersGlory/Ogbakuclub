<?php
ini_set('display_errors',1);
error_reporting("E_ALL");

require './config.php';
$status = '';
$response = '';

if (isset($_POST['mail']) && isset($_POST['password'])) {
  // code...
  $email = $_POST['mail'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM users WHERE mail='$email' LIMIT 1";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    // code...
    while ($row = $result->fetch_assoc()) {
      // code...
      $_SESSION["ids"] = $row['id'];
      if ($row['password'] ==$pass) {
          $status = "Successfully.";
          $response = "and you are a ". $row['status'];
          $mail = $row['id'];
      }else {
        // code...
        $status = "wrong details ";
        $response = "Please input the correct Information..";
      }
    }
  }else{
    $status = "You are not yet a member please.. register ..";
    $response = "Wrong details ..";
  }

    echo json_encode(array("status"=>$status,"response"=>$response, "mail"=>$mail));
}

 ?>
