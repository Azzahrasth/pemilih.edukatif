@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
<div class="row mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Kategorisasi Visi Misi</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
        Pasangan Calon Gubernur PILKADA 2024</div>

   <form class="form-inline poppins-regular position-relative" action="your-action-url" method="POST">
        <div class="row w-100 m-0">
            <!-- Pilih Daerah -->
            <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
                Pilih Daerah
            </div>
            <div class="col-lg-6 poppins-bold pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center position-relative" style="color: #162f50;">
                <select id="daerah" name="daerah" class="mx-3 d-block search-berita"  required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jakarta">Jakarta</option>
                </select>
            </div>
            
            <!-- Pilih Kategori -->
            <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-3 pt-2 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
                Pilih Kategori
            </div>
            <div class="col-lg-6 poppins-bold pt-lg-3 pt-2 d-flex justify-content-lg-end justify-content-center position-relative" style="color: #162f50;">
                <select id="kategori" name="kategori" class="mx-3 d-block search-berita"  required>
                    <option value="" disabled selected>Pilih</option>
                    <option value="Gubernur">Gubernur</option>
                    <option value="Wali Kota">Wali Kota</option>
                    <option value="Kabupaten">Kabupaten</option>
                </select>
            </div>
        </div>
        
        <!-- Submit Button -->
        <div class="row w-100 m-0 mt-4">
            <div class="col-12 d-flex justify-content-center">
                <button type="Submit" class="btn poppins-bold px-4" style="background-color: #162f50; color: white; border-radius: 15px; height: 48px;">Submit</button>
            </div>
        </div>
    </form>
</div>



<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5">

    <div class="col-lg-4 col-12 pt-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px;">
            <div class="row pt-3">
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold mb-3" style="font-size: 26px;">Choi Yeonjun - Araso</h5>
                <ul style="color: #162f50; font-size: 16px;" class="poppins-regular">
                    <li>Meningkatkan kualitas SDM dan daya saing bangsa.</li>
                    <li>Memperkuat UMKM dan koperasi.</li>
                    <li>Mewujudkan kedaulatan pangan dan energi.</li>
                    <li>Meningkatkan investasi dan ekspor.</li>
                </ul>
                <div class="row pt-3 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpaslon') }}" class="btn montserrat-semibold px-3 py-2" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px;">
            <div class="row pt-3">
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold mb-3" style="font-size: 26px;">Woonyoung - Suho</h5>
                <ul style="color: #162f50; font-size: 16px;" class="poppins-regular">
                    <li>Meningkatkan kualitas SDM dan daya saing bangsa.</li>
                    <li>Memperkuat UMKM dan koperasi.</li>
                    <li>Mewujudkan kedaulatan pangan dan energi.</li>
                    <li>Meningkatkan investasi dan ekspor.</li>
                </ul>
                <div class="row pt-3 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpaslon') }}" class="btn montserrat-semibold px-3 py-2" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px;">
            <div class="row pt-3">
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/avatar.png') }}" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold mb-3" style="font-size: 26px;">Mark Lee - Haechan</h5>
                <ul style="color: #162f50; font-size: 16px;" class="poppins-regular">
                    <li>Meningkatkan kualitas SDM dan daya saing bangsa.</li>
                    <li>Memperkuat UMKM dan koperasi.</li>
                    <li>Mewujudkan kedaulatan pangan dan energi.</li>
                    <li>Meningkatkan investasi dan ekspor.</li>
                </ul>
                <div class="row pt-3 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpaslon') }}" class="btn montserrat-semibold px-3 py-2" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
