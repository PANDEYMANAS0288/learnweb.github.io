<?php
$name=$_POST[name];
$visitor_email=$_POST[mail];
$subject=$_POST[subject];
$subject=$_POST[message];
$email_from='wd0288@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
"user Email:"visitor_email.\n".
"subject:$subject.\n".
"User Message:$message.\n";
$to='pandeymanas0288@gmail.com';
$headers="From:$email_from \r\n";
$headers.="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>