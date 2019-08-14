<?php
$name = "User";
$email = "gagandeep16037@iiitd.ac.in";
$message = "Your portfolio was visited by someone";

$to = "gagandeep16037@iiitd.ac.in";
$subject = "User incoming";
$body = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
$headers = "From: " . $email;

//send email
mail($to, $subject, $body, $headers);
?>