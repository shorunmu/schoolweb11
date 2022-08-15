<?php
$name = $_POST['namw'];
$visitor_email = $_POST['semail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@mywebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Emmail: $visitor_email.\n".
              "subject: $subject.\n".
              "User Mesaage: $message.\n".

$to   =  'muyideenshorunmu@gmail.com';

$headers = "From: $email_form \r\n"

$headers . = "Reply-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>