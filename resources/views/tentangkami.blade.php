@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Tentang Kami</h1>
        <img src="{{ asset('storage/images/logo2.png') }}" alt="Pemilih Edukatif" style="max-width: 500px;" class="my-4">
        <p class="poppins-regular" style="color: #162f50; font-size: 18px; text-align: justify;">
            <strong style="color: #F6B951;">Pemilih Edukatif</strong> adalah platform yang dirancang untuk memberikan akses mudah dan terpercaya kepada para pemilih dalam <strong style="color: #F6B951;">PILKADA 2024</strong> agar memperoleh informasi lengkap dan obyektif mengenai calon-calon dalam <strong style="color: #F6B951;">Pilkada 2024</strong>. Kami membantu masyarakat memahami <strong style="color: #F6B951;">visi, misi</strong>, dan <strong style="color: #F6B951;">program kerja</strong> setiap calon, sehingga mereka dapat membuat <strong style="color: #F6B951;">keputusan</strong> yang lebih terinformasi dan <strong style="color: #F6B951;">bijak</strong>.
        </p>
        <p class="poppins-regular" style="color: #162f50; font-size: 18px; text-align: justify;">
            Kami percaya bahwa dengan memberikan akses <strong style="color: #F6B951;">informasi komprehensif</strong>, Pemilih Edukatif dapat berperan dalam menciptakan pilkada yang lebih adil, transparan, dan demokratis. Mari wujudkan <strong style="color: #F6B951;">masa depan yang lebih baik</strong> melalui pilkada yang berkualitas dan berintegritas.
        </p>
    </div>
</div>

<div class="row justify-content-center align-items-center my-5">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h2 class="poppins-bold" style="color: #162f50;">Tim Kami</h2>
        
        <div class="row justify-content-center mb-4 align-items-center">
            <div class="col-12 text-center">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px; margin: 0 auto;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member1.png') }}" alt="Supervisor" style="width: 80px;" class="rounded-circle mb-2">
                        <h5 class="card-title poppins-bold" style="color: #162f50;">Ani Anisyah S.Pd., M.T.</h5>
                        <p class="card-text poppins-regular" style="color: #162f50;">Supervisor</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4 align-items-start">
            <div class="col text-center mb-4">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member1.png') }}" alt="Backend Developer" style="width: 80px;" class="rounded-circle mb-2">
                        <h6 class="card-title poppins-bold" style="color: #162f50;">Azzahra Siti Hadjar</h6>
                        <p class="card-text poppins-regular" style="color: #162f50;">Backend Developer</p>
                    </div>
                </div>
            </div>

            <div class="col text-center mb-4">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member1.png') }}" alt="Data Scientist" style="width: 80px;" class="rounded-circle mb-2">
                        <h6 class="card-title poppins-bold" style="color: #162f50;">Cantika Putri Artabilansyah</h6>
                        <p class="card-text poppins-regular" style="color: #162f50;">Data Scientist</p>
                    </div>
                </div>
            </div>

            <div class="col text-center mb-4">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member1.png') }}" alt="Data Scientist" style="width: 80px;" class="rounded-circle mb-2">
                        <h6 class="card-title poppins-bold" style="color: #162f50;">Hestina Dwi Hartini</h6>
                        <p class="card-text poppins-regular" style="color: #162f50;">Data Scientist</p>
                    </div>
                </div>
            </div>

            <div class="col text-center mb-4">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member1.png') }}" alt="Backend Developer" style="width: 80px;" class="rounded-circle mb-2">
                        <h6 class="card-title poppins-bold" style="color: #162f50;">Indah Resti Fauzi</h6>
                        <p class="card-text poppins-regular" style="color: #162f50;">Backend Developer</p>
                    </div>
                </div>
            </div>

            <div class="col text-center mb-4">
                <div class="card" style="background-color: #F6B951; border-radius: 10px; width: 180px; height: 250px;">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/tentangkami/member2.png') }}" alt="Frontend Developer" style="width: 80px;" class="rounded-circle mb-2">
                        <h6 class="card-title poppins-bold" style="color: #162f50;">Abdullah Hafidz Furqon</h6>
                        <p class="card-text poppins-regular" style="color: #162f50;">Frontend Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center my-5">
    <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <img src="{{ asset('storage/images/tentangkami/masukan.png') }}" alt="Feedback Illustration" class="img-fluid" style="max-width: 500px;">
                </div>
                <h3 class="poppins-bold" style="color: #162f50; font-size: 36px;">Masukan</h3>
                <p class="poppins-regular" style="color: #162f50; font-size: 18px; text-align: justify;">
                    Kami sangat menghargai masukan dan pendapat Anda. Umpan balik dari pengguna sangat penting bagi kami untuk terus memperbaiki dan mengembangkan platform Pemilih Edukatif. Dengan memberikan umpan balik, Anda membantu kami menciptakan pengalaman yang lebih baik dan lebih relevan bagi semua pemilih.
                </p>
                <a href="#" class="btn btn-primary" style="background-color: #162f50; border-color: #162f50; font-family: 'Poppins', sans-serif;">Berikan Masukan</a>
            </div>
        </div>
    </div>
</div>
@endsection
