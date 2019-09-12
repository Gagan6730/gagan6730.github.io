<?php

$subject = $_POST['_subject'];
$email = $_POST['_replyto'];
$message = $_POST['message'];
$headers = "From:".$email."\r\n" ;
$message = wordwrap($message,70);
mail("gagandeep16037@iiitd.ac.in", $subject, $message,$headers);

?>