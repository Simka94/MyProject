<?php
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];

$to = "simakalexandr94@gmail.com";
$subject = "HTML email";

$message = "$user_name $user_email";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to, $subject, $message, $headers);
?>