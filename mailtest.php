<?php
$to = 'jmyungjoon@naver.com';
$subject = 'This is our test mail.';
$message = '<h1>Hi, there.</h1><p>Thank you for testing</p>';
$header = "From : The sender name <jmyungjoon@naver.com>\r\n";
$header .= "Reply-To : jmyungjoon@naver.com\r\n";
$header .= "Content-type : text/html\r\n";

mail($to, $subject, $message, $header);
?>