<!-- get_messages.php -->
<?php
$file = fopen("chatlog.txt", "r");

// Read the contents of the chatlog.txt file
$contents = fread($file, filesize("chatlog.txt"));

// Close the file
fclose($file);

// Output the contents (chat messages)
echo $contents;
?>
