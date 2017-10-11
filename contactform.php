<?php
//initializing all variables based on values passed by html form
if(isset($_POST['submit'])){
  $fromName = $_POST['name'];
  $fromEmail = $_POST['email'];
  //echo $fromEmail; //This is a debug line
  $to = 'jpramassini@gmail.com';
  $subject = "Form Submission - " . $fromEmail;
  $emailMessage = $_POST['message'];
  $message = "$fromName ($fromEmail) wrote the following: $emailMessage";
  $headers = "From: $fromEmail";
  //sends gathered info to email
  mail($to,$subject,$message,$headers);
  header('Location:http://localhost:8888/personal-portfolio-site/contactcomplete.html');
  //echo "Message sent, thanks!";  //This is a debug line.
}
else{
  echo "failed";
}
 ?>
