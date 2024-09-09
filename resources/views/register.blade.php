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
<body>
    <div class="poppins-regular container mt-5 mb-5 px-lg-1 px-4">
        <div class="row justify-content-center align-items-center">
            <p class="text-end poppins-semibold ">
                <a href="{{ url('/') }}" class="yellow text-decoration-none">
                    Kembali ke Beranda <i class=" bi bi-house-fill"></i> 
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
                <h3 class="blue poppins-bold">REGISTER</h3>
                <div class="text-start link mt-1 mb-4">
                    <p class="text-start">Daftarkan dirimu sekarang juga!</p>
                </div>
                <form action="{{ route('actionregister') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label poppins-semibold blue">Name</label>
                        <input type="text" class="form-control form-login" id="name" name="name" placeholder="Masukan nama Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label poppins-semibold blue">Email</label>
                        <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukan Email Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="form-label poppins-semibold blue">Username</label>
                        <input type="text" class="form-control form-login" id="username" name="username" placeholder="Masukan Username Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label poppins-semibold blue">Password</label>
                        <input type="password" class="form-control form-login" id="password" name="password" placeholder="*******" required>
                    </div>

                    <button type="submit" class="poppins-semibold btn btn-primary btn-blue w-100 mt-3 mb-4">Daftar</button>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </form>
            </div>
            <p class="text-start mt-4 mt-lg-1">Sudah memiliki akun?<br>Kamu bisa <a class="text-decoration-none" href="{{ url('/login') }}">Masuk disini!</a></p>
        </div>
    </div>

    <!-- Modal for Flash Message -->
    @if(Session::has('message'))
        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Pemilih Edukatif</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ Session::get('message') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
                messageModal.show();
            });
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
