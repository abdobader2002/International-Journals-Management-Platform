<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Chat Bot</title>
    
</head>
<body>
    <style> 
    body {
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #346e5e;
}

.chat-container {
    width: 100%;
    max-width: 600px;
    height: 80vh;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    display: flex;
    flex-direction: column;
}

.chat-header {
    background-color: #007a5c;
    color: #fff;
    padding: 15px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
.chat-logo {
    width: 80px;
    height: 80px;
    margin-right: 40px;
    border-radius: 50%; 
    text-align: left;
}

.chat-box {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    background-color: #e9ecef;
}

.chat-message {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 8px;
    max-width: 75%;
    line-height: 1.5;
}

.user-message {
    background-color: #007a5c;
    color: #fff;
    align-self: flex-end;
}

.bot-message {
    background-color: #f1f1f1;
    color: #333;
    align-self: flex-start;
}

.chat-input {
    display: flex;
    border-top: 1px solid #ddd;
    padding: 10px;
    background-color: #fff;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

.chat-input input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
    font-size:15px;
}

.chat-input button {
    padding: 10px 20px;
    border: none;
    background-color: #007a5c;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.chat-input button:hover {
    background-color: #346e5d;
}
.chat-input :hover {
    border-color:#346e5d;
}
.close-icon {
    display: inline-block;
    width: 24px;
    height: 24px;
    position: relative;
    text-decoration: none;
}

.close-icon::before,
.close-icon::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 16px;
    height: 2px;
    background-color: white;
}

.close-icon::before {
    transform: translate(-50%, -50%) rotate(45deg);
}

.close-icon::after {
    transform: translate(-50%, -50%) rotate(-45deg);
}
    </style>
    
    <div class="chat-container">
          <div class="chat-header">
        <img src="images 1.png" alt="Chat Bot Logo" class="chat-logo">
            <h1>IJMS BOT</h1>
           
        </div>
        <button onclick="closeChatbot()" id="chatbot" class="close-icon" style="bottom:95px;margin-left:560px;transform: scale(1.5);background: none; border: none;"></button>
        
        <div class="chat-box" id="chat-box">
            <!-- Chat messages will be appended here -->
        </div>
        <div class="chat-input">
            <input type="text" id="text" placeholder="Type your message here...">
            <button onclick="generateResponse();">Send</button>
        </div>
    </div>
    <script src="scripthelp.js"></script>
    <script>
        function closeChatbot() {
            // Close the chatbot (assuming it's an iframe or div)
            document.getElementById("chatbot").style.display = "none";

            // Redirect to the previous page
            window.history.back();
        }
    </script>
    
</body>
</html>