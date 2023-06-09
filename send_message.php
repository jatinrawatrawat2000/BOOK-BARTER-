<!-- send_message.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $userId = $_POST["user_id"];
    $time = date("h:i A"); // Current time

    // Save the chat to a file
    $file = fopen("chatlog.txt", "a");
    fwrite($file, $time . " - User" . $userId . ": " . $message . "\n");
    fclose($file);
}
?>
