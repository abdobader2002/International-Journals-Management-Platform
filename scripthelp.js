function generateResponse() {
    var textInput = document.getElementById("text");
    var userInput = textInput.value;
    var chatBox = document.getElementById("chat-box");

    if (userInput.trim() === "") {
        return;
    }

    appendMessage(userInput, 'user-message');

    fetch("responsehelp.php", {
        method: "post",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            text: userInput,
        }),
    })
    .then((res) => res.json())
    .then((data) => {
        if (data.response) {
            appendMessage(data.response, 'bot-message');
        } else {
            appendMessage('Error: ' + data.error, 'bot-message');
        }
    })
    .catch((error) => {
        appendMessage('Error: ' + error, 'bot-message');
    });

    textInput.value = "";
}

function appendMessage(message, className) {
    var chatBox = document.getElementById("chat-box");
    var messageElement = document.createElement("div");
    messageElement.className = 'chat-message ' + className;
    messageElement.textContent = message;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
}
