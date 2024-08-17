@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Calon Kepala Daerah</h1>
        <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <h2 class="poppins-bold">Jeon Jungkook</h2> </br>
        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Tempat & Tanggal Lahir</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                Jakarta, 1 September 1974
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Umur</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                49 Tahun
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Latar Belakang</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                Jeon Jungkook adalah seorang intelektual, akademisi, dan politisi Indonesia. Dia lahir pada tanggal 1 September 1997 di Busan, Korea Selatan. Jeon Jungkook dikenal sebagai seorang pemikir yang aktif dalam dunia pendidikan dan politik di Indonesia.
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Pendidikan</h4>
                <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                    <li>Sarjana Ilmu Politik dari Universitas Gadjah Mada (UGM) Yogyakarta.</li>
                    <li>Master Bidang Administrasi Pendidikan dari Universitas Maryland, College Park, Amerika Serikat.</li>
                    <li>Doktor Bidang Kebijakan Pendidikan dari Universitas Melbourne, Australia</li>
                </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Jejak Karir</h4>
            
            <il class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Mantan Rektor Universitas Paramadina, Jakarta.</li>
                <li>Menteri Pendidikan dan Kebudayaan Indonesia pada periode 2014-2016.</li>
                <li>Gubernur DKI Jakarta tahun 2017-2022.</li>
                <li>Ketua DPC Partai Demokrat Kota Bandung 2014-2017.</li>
            </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Prestasi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Juara 1 Lomba Makan Kerupuk Tingkat Kecamatan Pasar Senen 2020.</li>
                <li>Honorable Mention Essay Competition oleh Oxford University 2015.</li>
                <li>Pemenang Clash of Champions oleh Ruang Guru 2014.</li>
            </ul> </br>
        </div>
        <div>            
            <h4 class="poppins-bold" style=" text-align: justify;">Riwayat Organisasi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Juara 1 Lomba Makan Kerupuk Tingkat Kecamatan Pasar Senen 2020.</li>
                <li>Honorable Mention Essay Competition oleh Oxford University 2015.</li>
                <li>Pemenang Clash of Champions oleh Ruang Guru 2014.</li>
            </ul> </br>
        </div>
        <div>            
            <h4 class="poppins-bold" style=" text-align: justify;">Kontroversi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                <li>Terlalu tampan. WKWKWK</li>
            </ul> </br>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 text-center">
            <h2 class="poppins-bold" style="color: #162f50; font-size: 36px; text-align: left">Kandidat Lainnya</h2>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="storage/images/tentangkami/member1.png" class="card-img-top" alt="Kim Jennie" style="width: 100px; height: 100px; margin: 0 auto;">
                                <h5 class="card-title mt-3">Kim Jennie</h5>
                                <a href="#" class="btn btn-link text-warning">Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="storage/images/tentangkami/member2.png" class="card-img-top" alt="Kim Taehyung" style="width: 100px; height: 100px; margin: 0 auto;">
                                <h5 class="card-title mt-3">Kim Taehyung</h5>
                                <a href="#" class="btn btn-link text-warning">Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
