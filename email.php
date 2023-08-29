<?php
$to = 'Sagarkumar12345648@gmail.com';
$subject = 'Response from Website';
$message = 'Hello World This is testing mail'; 
$headers = 'From: info@antimnivas.com';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo '<div style="background: #dff0d8;margin: 0px 615px;border-radius: 40px;text-align: center;font-size: 20px;border-color: #dff0d8;">Your mail has been sent successfully.</div>';
} else{
    echo 'Unable to send email. Please try again.';
}
?>