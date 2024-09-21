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
      height: 88vh; /* Mengatur tinggi chat bot */
    }

    .top {
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
      max-height: calc(80vh - 120px); /* Mengurangi tinggi agar sesuai dengan header dan footer */
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
      flex: 1; /* Mengambil sisa ruang */
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 10px;
      box-sizing: border-box; /* Memastikan padding tidak menambah lebar total */
      font-size: 16px; /* Ukuran font yang lebih besar */
    }

    .bottom button {
      background-color: #162f50;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 10px 15px;
      cursor: pointer;
      min-width: 80px;
      font-size: 16px; /* Ukuran font yang lebih besar */
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
    <form>
      <input type="text" id="message" name="message" placeholder="Masukan pesan..." autocomplete="off">
      <button type="submit">Kirim</button>
    </form>
  </div>
  <!-- End Footer -->

</div>

<script>
  // Broadcast messages
  $("form").submit(function (event) {
    event.preventDefault();

    // Stop empty messages
    if ($("form #message").val().trim() === '') {
      return;
    }

    // Disable form
    $("form #message").prop('disabled', true);
    $("form button").prop('disabled', true);

    $.ajax({
      url: "/chat",
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      data: {
        "model": "gpt-3.5-turbo",
        "content": $("form #message").val()
      }
    }).done(function (res) {

      // Populate sending message
      $(".messages").append('<div class="right message">' +
        '<p>' + $("form #message").val() + '</p>' +
        '<img src="{{ asset("storage/images/sobat_pemilih.png") }}" alt="Avatar">' +
        '</div>');

      // Populate receiving message
      $(".messages").append('<div class="left message">' +
        '<img src="{{ asset("storage/images/sobat_pemilih.png") }}" alt="Avatar">' +
        '<p>' + res + '</p>' +
        '</div>');

      // Cleanup
      $("form #message").val('');
      $(".messages").scrollTop($(".messages")[0].scrollHeight);

      // Enable form
      $("form #message").prop('disabled', false);
      $("form button").prop('disabled', false);
    });
  });
</script>
</body>
</html>
