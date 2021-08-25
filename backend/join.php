<?php

ini_set('display_errors',1);
error_reporting("E_ALL");
$status = "";
$response = "";
$statusM = "";
$responseM = "";
$statuss = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../vendor/autoload.php";

 require_once './config.php';

if (isset($_POST['surname']) && isset($_POST['othernames'])) {

  $surname = $_POST["surname"];
  $othernames = $_POST["othernames"];
  $occupation = $_POST["occupation"];
  $dob = $_POST["dob"];
  $pob = $_POST["pob"];
  $education = $_POST["education"];
  $referee = $_POST["referee"];
  $refereeTwo =  $_POST["refereeTwo"];
  $signature = $_POST["signature"];
  $signatureTwo = $_POST["signatureTwo"];
  $memberOC = $_POST["memberOC"];
  $memberOC1 = $_POST["memberOC1"];
  $rAddress = $_POST["rAddress"];
  $homeTel =  $_POST["homeTel"];
  $officeAddress = $_POST["officeAddress"];
  // $password = $_POST['password'];
  $marital = $_POST["marital"];
  $officeTel =  $_POST["officeTel"];
  $reason =  $_POST["reason"];
  $hobbies =  $_POST["hobbies"];
  $nextOfKin =  $_POST["nextOfKin"];
  $mail = $_POST['mail'];


  $mm = "Ogbaku Club ". "info@ogbakuclub.org";
  $body = "All the details of the new member are in the following format <br> Name: ".$surname." ".$othernames.
          "<br> Email: ".$mail."<br> Occupation: ".$occupation."<br> Address: ".$rAddress."<br> Phone Number: ".$homeTel."<br>......";
  $from = $mm;
      $to = "info@ogbakuclub.org";
      $subject = "New member registration.";
      $msg = $body;
      $headers = "FROM: ".$from;


  $query = "SELECT * FROM users WHERE mail='$mail'";
  $sql = "INSERT INTO users (surname,othernames,mail,occupation,dob,pob,education,referee,refereeTwo,signature,signatureTwo,memberOC,memberOC1,rAddress,
      homeTel,officeAddress,marital,officeTel,reason,hobbies,nextOfKin,status) VALUES ('$surname','$othernames','$mail','$occupation','$dob','$pob',
    '$education','$referee','$refereeTwo','$signature','$signatureTwo','$memberOC','$memberOC1','$rAddress','$homeTel','$officeAddress',
    '$marital','$officeTel','$reason','$hobbies','$nextOfKin','Not member')";
  

$result = $conn->query($query);
  if ($result->num_rows > 0) {
    // code...
    while ($row = $result->fetch_assoc()) {
      // code...
      if ($row['mail'] == $mail) {
          $status = "Email Already Exist... ";
          $response = "Please Use another Email Or Login.. ";
      }
    }
  }else{
    $register = $conn->query($sql) === TRUE;
        if ($register) {
          $status = "Your details has been successfully submitted and ";
          $response = "confirmation email has been sent to ";
          if(mail($to,$subject,$msg,$headers)){
            $statusM = "Successfully sent message to admin..";
            $responseM = "successfully send";
            $fname = $surname." ". $othernames;
            //Sending to the users Mail
            $mails = new PHPMailer(true);
            $mails->From = "info@ogbakuclub.org";
            $mails->FromName = "Ogbaku Club.";

            //To address and name
            $mails->addAddress($mail, $fname);

            //CC and BCC
            $mails->addCC("info@ogbakuclub.org");
            // $mails->addBCC("binfo@ogbakuclub.org");
            //Send HTML or Plain Text emails
            $mails->isHTML(true);

            $mails->Subject = "Confirm your email Address.";
            $mails->Body = "<i>Dear ".$othernames."</i><br>Your details have been submitted for Ogbaku club membership registration <br> Please confirm you email Address by clicking the link below <br> <a href='https://ogbakuclub.org/verify.php?email=". $mail ."'>Verify</a>";
            $mails->AltBody = "Ogbaku Club";

            try {
              $mails->send();
              $statuss= "Message has been sent successfully";
          } catch (Exception $e) {
              $statuss = "Mailer Error: " . $mails->ErrorInfo;
          }
            //ends here
          } else {
            $statusM = "Unable to send your message!!! ";
            $responseM = "Error sending this file";
         }
        }else{
          $status = "failed to insert your data";
          $response = "error ". $conn->error;
        }
  }


  echo json_encode(array("status"=>$status,"response"=>$response,"statusM"=>$statusM, "responseM"=>$responseM, 'statuss'=>$statuss));

}
$conn->close();

 ?>
