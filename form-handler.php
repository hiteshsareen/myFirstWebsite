<?php
$name = $_POST['name '];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mywebsite@gmail.com';

$email_subject = 'new form submission';

$email_body = "user name :$name.\n".
               "user email :$visitor_email.\n".
               "user subject :$subject.\n".
               "user message :$message.\n";

$to = 'hunnysareen5@gmail.com'

$headers = " From : $email_from\r \n" ;

$headers .= "Reply_to : $visitor_email \r \n ";


mail($to , $email_subject , $email_body , $headers);

header("location : contact.html")
 ?>
