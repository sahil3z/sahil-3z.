<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$problem = $_POST['problem'];
$message = $_POST['message'];

$email_from ='sahilpal2890@gmail.com-';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
               "problem: $problem.\n".
               "User message: $message.\n";

$to = 'sahilpal2890@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("location: contect.html");               






?>