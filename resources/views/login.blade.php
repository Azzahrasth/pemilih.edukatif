<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilih Edukatif</title>
    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">

</head>
<body >
    <div class="poppins-regular container mt-5 mb-5 px-lg-1 px-4">
        <div class="row justify-content-center align-items-center">
        <p class="text-end poppins-semibold ">
            <a href="{{ url('/') }}" class="yellow text-decoration-none">
                Kembali ke Beranda <i class="bi bi-house-fill"></i> 
            </a>
        </p>
            <div class="col-lg-5 text-center mb-4 position-relative">
                <div class="starburst-blue"></div>
                <h2 class="blue poppins-bold text-start mt-4">
                    HALLO SOBAT PELIF!
                </h2>
                <h2 class="yellow poppins-semibold text-start mb-2">
                   Pilih Calon Pemimpin <br> Daerah Mu dengan Cerdas
                </h2>
                <img src="{{ asset('storage/images/logo2.png') }}" alt="Pemilih Edukatif Logo" class="img-fluid logo-background mt-3 position-relative" style="z-index: 1;">
            </div>

            <div class="col-lg-6">
                <h3 class="blue poppins-bold">LOGIN</h3>
                <div class="text-start link mt-1 mb-4">
                        <p class= "text-start ">Masuk ke akun mu untuk menjelajah lebih luas !</p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="form-label poppins-semibold blue">Username</label>
                        <input type="text" class="form-control form-login" id="username" name="username" placeholder="Masukan Username Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label poppins-semibold blue">Password</label>
                        <input type="password" class="form-control form-login" id="password" name="password" placeholder="*******" required>
                    </div>

                     <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label blue poppins-regular" for="remember">Ingat Saya</label>
                        </div>
                        <a href="#" class="blue poppins-regular text-decoration-none">Lupa password?</a>
                    </div>
                    <button type="submit" class=" poppins-semibold btn btn-primary btn-login w-100 mb-4">Masuk</button>
                    <div class="text-center my-3 mx-5">
                        <div class="text-center my-3 d-flex align-items-center">
                            <hr class="flex-grow-1">
                            <span class="px-2 poppins-regular blue">atau masuk dengan</span>
                            <hr class="flex-grow-1">
                        </div>
                        <a href="#" class="mt-3 btn btn-outline-dark w-100 py-3 btn-google">
                            <img src="https://img.icons8.com/color/16/000000/google-logo.png" alt="Google Logo" class="me-2">
                            Login dengan Google
                        </a>
                    </div>
                    
                </form>
            </div>
            <p class= "text-start mt-4 mt-lg-1 ">Tidak memiliki akun?<br>Kamu bisa <a class="text-decoration-none" href="{{ url('/register') }}" >Daftar disini!</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
