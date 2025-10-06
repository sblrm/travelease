<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan TravelEase Bot</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .chat-header {
            background-color: #3498db;
            color: #fff;
            padding: 1rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            flex-shrink: 0;
        }

        .chat-box {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #f9f9f9;
        }

        .message {
            padding: 12px 16px;
            border-radius: 20px;
            max-width: 60%;
            word-wrap: break-word;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            animation: fadeIn 0.3s ease-in-out;
        }

        .bot {
            background-color: #ffffff;
            align-self: flex-start;
        }

        .user {
            background-color: #3498db;
            color: #fff;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 1rem;
            border-top: 1px solid #ccc;
            background-color: #ffffff;
            flex-shrink: 0;
        }

        .chat-input input {
            flex: 1;
            padding: 12px 16px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-right: 10px;
            font-size: 1rem;
        }

        .chat-input button {
            padding: 12px 20px;
            border: none;
            background-color: #2ecc71;
            color: #fff;
            border-radius: 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .chat-input button:hover {
            background-color: #27ae60;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Scrollbar styling */
        .chat-box::-webkit-scrollbar {
            width: 8px;
        }

        .chat-box::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 4px;
        }

        .chat-box::-webkit-scrollbar-track {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="chat-header">
        TravelEase ChatBot
    </div>

    <div class="chat-box" id="chatBox">
        <div class="message bot">Halo! Saya TravelEase Bot. Ada yang bisa saya bantu?</div>
    </div>

    <div class="chat-input">
        <input type="text" id="messageInput" placeholder="Ketik pesan..." autocomplete="off">
        <button onclick="sendMessage()">Kirim</button>
    </div>

    <script>
        async function sendMessage() {
            const input = document.getElementById('messageInput');
            const chatBox = document.getElementById('chatBox');
            const userMessage = input.value.trim();

            if (userMessage === '') return;

            // Tampilkan pesan user
            const userDiv = document.createElement('div');
            userDiv.classList.add('message', 'user');
            userDiv.textContent = userMessage;
            chatBox.appendChild(userDiv);
            chatBox.scrollTop = chatBox.scrollHeight;

            // Clear input
            input.value = '';
            input.focus();

            try {
                const response = await fetch('{{ url("/chatbot") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message: userMessage })
                });

                const data = await response.json();

                // Tampilkan balasan bot
                const botDiv = document.createElement('div');
                botDiv.classList.add('message', 'bot');
                botDiv.textContent = data.reply;
                chatBox.appendChild(botDiv);
                chatBox.scrollTop = chatBox.scrollHeight;

            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Kirim dengan tombol Enter
        document.getElementById('messageInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>
