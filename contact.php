<?php
//initializing all variables based on values passed by html form
if(isset($_POST['submit'])){
  $fromName = $_POST['name'];
  $fromEmail = $_POST['email'];
  $to = 'jpramassini@gmail.com';
  $subject = 'Form Submission';
  $emailMessage = $_POST['message'];
  $message = "$fromName, ($fromEmail) wrote the following: $emailMessage";

  $headers = "From: $from";
  //sends gathered info to email
  mail($to,$subject,$message,$headers);
  echo "Message sent, thanks!";
}
else{
  echo "failed";
}


 ?>
