<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemilih Edukatif</title>
    <link rel="icon" href="{{ asset('storage/images/Logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
</head>

<body>
    <div class="container-fluid align-items-center d-flex justify-content-center" style="height: 100vh;">
        <div class="row m-5 p-2" style="background-color: #F1F1F1; border-radius: 20px;">
            <div class="col-12 poppins-bold p-lg-2 text-center" style="color: #162F50; font-size: 25px;">
                @if(session('success') == 1)
                <span>Verifikasi Berhasil. Akun Anda sudah aktif.</p>
                @else
                <span>Key tidak valid!</p>
                @endif
            </div>
            <div class="col-lg-12 pb-2 text-center">
                <a href="{{ route('login') }}" class="btn poppins-bold px-4" style="background-color: #F6B951; color: white; font-size: 25px; border-radius: 15px;">Kembali Login</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>