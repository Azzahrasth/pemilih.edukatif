@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Pasangan Calon Kepala Daerah</h1>
        <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <h2 class="poppins-bold">Mark Lee - Haechan</h2> </br>
        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Visi Misi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Meningkatkan kualitas SDM dan daya saing pangan.</li>
                <li>Memperkuat UMKM dan koperasi.</li>
                <li>Mewujudkan kedaulatan pangan dan energi.</li>
                <li>Meningkatkan investasi dan ekspor di Provisi Jawa Barat</li>
            </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Motivasi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                Kami melihat Indonesia sedang menghadapi tantangan besar, tetapi sekaligus peluang, yaitu membludaknya orang-orang muda produktif yang sering disebut sebagai bonus demografi. Jika tidak dikelola dengan baik, bonus demografi akan berujung pada malapetaka demografi dimana orang-orang muda yang seyogyanya produktif menjadi pengangguran dan ini akan berujung kepada krisis sosial yang mengancam stabilitas bangsa. 
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Target Sasaran</h4>
            <ol class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Mempercepat Pembangunan Manusia Indonesia Unggul yang Berkualitas, Produktif dan Berkepribadian</li>
                <li>Mempercepat Penguasaan Sains dan Teknologi Melalui Percepatan Riset dan Inovasi (R&I) Berdikari</li>
                <li> Mempercepat Pembangunan Ekonomi Berdikari Berbasis Pengetahuan dan Nilai Tambah</li>
                <li>Mempercepat Pemerataan Pembangunan Ekonomi</li>
                <li>Mempercepat Pembangunan Sistem Digital Nasional</li>
                <li>Mempercepat Perwujudan Lingkungan Hidup yang Berkelanjutan Melalui Ekonomi Hijau dan Biru</li>
            </ol> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Partai Pengusung</h4>
            <div class="container my-5">
            <div class="row justify-content-left">
                <div class="col-md-3">
                    <div class="card text-center custom-card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img src="storage/images/partai/gerindra.png" class="card-img-top" alt="Partai 3" style="max-width: 100px; height: 120px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center custom-card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img src="storage/images/partai/pdip.png" class="card-img-top" alt="Partai 3" style="max-width: 100px; height: 120px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center custom-card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img src="storage/images/partai/pkb.png" class="card-img-top" alt="Partai 3" style="max-width: 100px; height: 120px;">
                        </div>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</div>
@endsection
