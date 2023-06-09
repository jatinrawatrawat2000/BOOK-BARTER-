<!-- chat.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <style>
        .chatbox {
            width: 300px;
            height: 400px;
            overflow-y: scroll;
        }
        .message {
            padding: 5px;
            margin-bottom: 10px;
        }
        .sender {
            background-color: #DCF8C6;
            text-align: right;
        }
        .receiver {
            background-color: #E5E5EA;
            text-align: left;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to fetch and display chat messages
        function fetchMessages() {
            $.ajax({
                url: "get_messages.php",
                method: "GET",
                success: function(data) {
                    $("#chatbox").html(data);
                    scrollChatboxToBottom();
                }
            });
        }

        // Function to auto-scroll the chatbox to the bottom
        function scrollChatboxToBottom() {
            var chatbox = document.getElementById("chatbox");
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        // Periodically fetch messages every 2 seconds
        setInterval(fetchMessages, 2000);

        // Submit message via AJAX
        $(document).on("submit", "form", function(e) {
            e.preventDefault();
            var message = $("input[name='message']").val();
            var userId = $("input[name='user_id']").val();
            $.ajax({
                url: "send_message.php",
                method: "POST",
                data: { message: message, user_id: userId },
                success: function() {
                    $("input[name='message']").val("");
                }
            });
        });
    </script>
</head>
<body>
    <div class="chatbox" id="chatbox">
        <!-- Messages will be displayed here -->
    </div>
    <form>
        <input type="text" name="message" placeholder="Type your message..." required>
        <input type="hidden" name="user_id" value="1"> <!-- User1's ID -->
        <input type="submit" name="send" value="Send">
    </form>
</body>
</html>