<?php
$to = 'jatinrawatrawat2000@gmail.com'; // Recipient's email address
$subject = 'Test Email'; // Email subject
$message = 'This is a test email message.'; // Email body
$from="pro45go@gmail.com";
$headers = "From: $from" ;

// Send the email
mail($to, $subject, $message, $headers); 
    echo 'Email sent successfully!';

?>

