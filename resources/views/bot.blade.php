<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Security Token -->
    <title>My Local AI Bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Chat Box Design */
        .chat-container {
            height: 400px;
            overflow-y: auto;
            /* Scroll bar aayega */
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 75%;
        }

        .user-msg {
            background-color: #0d6efd;
            /* Blue */
            color: white;
            margin-left: auto;
            /* Right side shift */
            border-bottom-right-radius: 5px;
        }

        .ai-msg {
            background-color: #e9ecef;
            /* Gray */
            color: black;
            margin-right: auto;
            /* Left side shift */
            border-bottom-left-radius: 5px;
        }
    </style>
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">🤖 Laravel AI Assistant</h5>
                        <small>Powered by Foundry Local</small>
                    </div>

                    <div class="card-body">

                        <!-- Chat History Area -->
                        <div id="chat-box" class="chat-container">

                            <!-- if database in chats , then show -->
                            @foreach($chats as $chat)
                            <!-- User Message -->
                            <div class="message user-msg">
                                {{ $chat->user_query }}
                            </div>

                            <!-- AI  Message -->
                            <div class="message ai-msg">
                                {{ $chat->ai_response }}
                            </div>
                            @endforeach
                        </div>

                       <!-- Input Area -->
                        <div class="input-group mt-3">
                            <input type="text" id="user-input" class="form-control" placeholder="Type a message...">
                            <button class="btn btn-primary" id="send-btn">Send 🚀</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Logic -->
    <script>
        const chatBox = document.getElementById('chat-box');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        // Function to append message to chat
        function appendMessage(text, sender) {
            const msgDiv = document.createElement('div');
            msgDiv.classList.add('message', sender === 'user' ? 'user-msg' : 'ai-msg');
            msgDiv.innerText = text;
            chatBox.appendChild(msgDiv);
            chatBox.scrollTop = chatBox.scrollHeight; // Auto scroll to bottom
        }

        // Send Button Click Event
        sendBtn.addEventListener('click', function() {
            const message = userInput.value;
            if (message.trim() === '') return;

            // 1. User ka message screen par dikhao
            appendMessage(message, 'user');
            userInput.value = ''; // Input clear karo

            // 2. Loading dikhao
            const loadingDiv = document.createElement('div');
            loadingDiv.id = 'loading';
            loadingDiv.classList.add('message', 'ai-msg');
            loadingDiv.innerText = 'Typing...';
            chatBox.appendChild(loadingDiv);

            // 3. AJAX Request (Laravel ko bhejo)
            fetch("{{ route('send.chat') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        message: message
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Loading hatao
                    document.getElementById('loading').remove();

                    if (data.status === 'success') {
                        appendMessage(data.reply, 'ai');
                    } else {
                        appendMessage("Error: " + data.reply, 'ai');
                    }
                })
                .catch(error => {
                    document.getElementById('loading').remove();
                    appendMessage("Error connecting to server.", 'ai');
                });
        });

        // Enter key dabane par bhi send ho
        userInput.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                sendBtn.click();
            }
        });
    </script>

</body>

</html>