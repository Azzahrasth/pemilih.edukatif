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
    @include('templates.header')

    <div class="container-fluid">
        @yield('content')
    </div>

    <a href="/chatbot" class="floating-btn">
        <img src="{{ asset('storage/images/sobat_pemilih.png') }}" alt="Chat Sobat Pemilih" class="floating-icon">
    </a>

 
    @include('templates.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').mouseover(function() {
                $('.dropdown-menu').show();
            })

            $('.dropdown-toggle').mouseout(function() {
                t = setTimeout(function() {
                    $('.dropdown-menu').hide();
                }, 100);

                $('.dropdown-menu').on('mouseenter', function() {
                    $('.dropdown-menu').show();
                    clearTimeout(t);
                }).on('mouseleave', function() {
                    $('.dropdown-menu').hide();
                })
            })
        })
    </script>

    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
</body>

</html>