<?php
require_once("includes/config.php");
if(isset( $_REQUEST['name']))
 $name = $_REQUEST['name'];
if(isset( $_REQUEST['email']))
 $email = $_REQUEST['email'];
if(isset( $_REQUEST['message']))
 $message = $_REQUEST['message'];
if(isset( $_REQUEST['subject']))
 $subject = $_REQUEST['subject'];
$sqlsubmit="INSERT INTO contactsubmit (name, email,subject, message) VALUES ('$name','$email ','$subject','$message')";
mysqli_query($con,$sqlsubmit);
$content="From: $name \n Email: $email \n Message: $message";
$recipient = "iriazul217@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader);
header("Location:contact-us.php?mailsuccess");

?>