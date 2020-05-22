<?php

   if (isset($_POST['submit'])) {

    $name = $_POST("name");
    $phone = $_POST("phone");
    $message = $_POST("message");
    $email = $_POST("email");

    $to="akandeadebowale0@gmail.com";
    $subject="Hair cut booking";
   
$body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $email;
  $body .= "\r\n Message: " . $message;
  $headers = "From".$email;
  if ( mail($to,$subject,$body,$headers)){
     echo "<div class='alert alert-success'>Sent successfully</div>";
  }else{
    echo "<div class='alert alert-danger'>Sent successfully</div>";
  }
   }



?>