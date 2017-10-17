<?php
//initializing all variables based on values passed by html form
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6LffFzQUAAAAAFb0JtH9JueEzjBmeHofz8KdXwnh';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
      }
      }
        if($responseData->success){

  $fromName = $_POST['name'];
  $fromEmail = $_POST['email'];
  //echo $fromEmail; //This is a debug line
  $to = 'jpramassini@gmail.com';
  $subject = "Form Submission - " . $fromEmail;
  $emailMessage = $_POST['message'];
  $message = "$fromName ($fromEmail) wrote the following: $emailMessage";
  $headers = "From: $fromEmail";
  //$response = $_POST[g-recaptcha-response]
  //sends gathered info to email
  mail($to,$subject,$message,$headers);
  header('Location:http://jpramassini.com/contactcomplete.html');
  //echo "Message sent, thanks!";  //This is a debug line.
}
else{
  header('Location:http://jpramassini.com/contact.php');
}
 ?>
