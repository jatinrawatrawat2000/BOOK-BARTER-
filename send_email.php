<?php
$to_email = "beats.21online@gmail.com";
$subject = "Test Email";
$body = "This is a test email sent from the terminal using PHP.";

$headers = "From: pro45go@gmail.com\r\n";
// $headers .= "Reply-To: sender@example.com\r\n";
// $headers .= "CC: cc@example.com\r\n";
// $headers .= "BCC: bcc@example.com\r\n";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
