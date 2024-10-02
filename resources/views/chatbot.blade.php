<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemilih Edukatif</title>
  <link rel="icon" href="https://assets.edlin.app/favicon/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .chat {
      width: 100%;
      max-width: 600px;
      margin: 35px auto;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      height: 88vh;
    }

    .top {
      border-radius: 6px;
      display: flex;
      align-items: center;
      padding: 15px;
      background-color: #162f50;
      color: white;
      position: relative;
    }

    .top img {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .close-button {
      position: absolute;
      right: 20px;
      background: none;
      border: none;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }

    .messages {
      flex: 1;
      max-height: calc(80vh - 120px);
      overflow-y: auto;
      padding: 10px;
    }

    .message {
      display: flex;
      align-items: flex-start;
      margin-bottom: 10px;
    }

    .left {
      justify-content: flex-start;
    }

    .right {
      justify-content: flex-end;
    }

    .message img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      margin-right: 8px;
    }

    .left p, .right p {
      border-radius: 8px;
      padding: 10px;
      max-width: 75%;
    }

    .left p {
      background-color: #f6b951;
    }

    .right p {
      background-color: #162f50;
      color: white;
    }

   .bottom {
      padding: 10px;
      background-color: #f1f1f1;
      display: flex;
      align-items: center;
    }

    .bottom form {
      display: flex;
      width: 100%;
    }

    .bottom input {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 10px;
      box-sizing: border-box;
      font-size: 16px;
    }

    .bottom button {
      background-color: #162f50;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 10px 15px;
      cursor: pointer;
      min-width: 80px;
      font-size: 16px;
    }

    .bottom button:hover {
      background-color: #214b81;
    }
  </style>
</head>

<body>
<div class="chat">

  <!-- Header -->
  <div class="top">
    <img src="{{ asset('storage/images/sobat_pemilih.png') }}" alt="Avatar">
    <div>
      <p>Sobat Pemilih</p>
      <small>Online</small>
    </div>
    <button class="close-button" onclick="window.history.back()">X</button>
  </div>
  <!-- End Header -->

  <!-- Chat -->
  <div class="messages">
    <div class="left message">
      <img src="{{ asset('storage/images/sobat_pemilih.png') }}" alt="Avatar">
      <p>Ayo mulai berdiskusi dengan sobat pemilih!!</p>
    </div>
  </div>
  <!-- End Chat -->

  <!-- Footer -->
  <div class="bottom">
    <form id="chatForm">
      <input type="text" id="message" name="message" placeholder="Masukan pesan..." autocomplete="off">
      <button type="submit">Kirim</button>
    </form>
  </div>
  <!-- End Footer -->

</div>

<script>
  document.getElementById("chatForm").addEventListener("submit", async function (event) {
    event.preventDefault();

    const message = document.getElementById("message").value.trim();

    if (!message) {
      return; // Jangan kirim pesan kosong
    }

    // Tampilkan pesan pengguna
    const userMessageHTML = '<div class="right message">' +
      '<p>' + message + '</p>' +
      '<img src="{{ asset("storage/images/sobat_pemilih.png") }}" alt="Avatar">' +
      '</div>';
    document.querySelector(".messages").insertAdjacentHTML("beforeend", userMessageHTML);

    // Scroll ke bawah
    document.querySelector(".messages").scrollTop = document.querySelector(".messages").scrollHeight;

    // Reset input
    document.getElementById("message").value = '';

    try {
      // Panggil API chatbot
      const response = await fetch('https://b51a-2404-8000-1024-22bb-2964-c3a9-6595-5b66.ngrok-free.app/api/chatbot', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ question: message })
      });

      const data = await response.json();

      // Tampilkan pesan dari bot
      const botMessageHTML = '<div class="left message">' +
        '<img src="{{ asset("storage/images/sobat_pemilih.png") }}" alt="Avatar">' +
        '<p>' + data.response + '</p>' +
        '</div>';
      document.querySelector(".messages").insertAdjacentHTML("beforeend", botMessageHTML);

      // Scroll ke bawah
      document.querySelector(".messages").scrollTop = document.querySelector(".messages").scrollHeight;
    } catch (error) {
      console.error("Error fetching chatbot response:", error);
    }
  });
</script>
</body>
</html>
