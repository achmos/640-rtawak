<?php
$email_to = $_POST['email_address'];
$email_sub = $_POST['subject'];
$email_message = $_POST['message'];
$header = "From: thedude@theWebsite.com" . "\r\n";

@mail($email_to, $email_sub, $email_message, $header);
?>
