@extends('layouts.app')

@section('content')
<div class="row pl-lg-5 pr-lg-5">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50">Berita Pilkada 2024</div>
    <div class="col-12 pt-lg-2 pt-3 pl-lg-0 pl-2 pr-lg-0 pr-2 poppins-bold text-center deskripsi-berita" style="color: #F6B951">Dapatkan berita terkini tentang para calon pemimpin daerah kita dan pilkada 2024</div>
    <div class="col-lg-6 poppins-bold pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Populer</div>
    <div class="col-lg-6 poppins-bold pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center" style="color: #162f50;">
        <form class="form-inline poppins-regular">
            <input class="form-control mr-sm-2 pl-5 search-berita" type="search" placeholder="Cari Berita" aria-label="Search">
        </form>
    </div>
</div>

<div class="row m-xl-5 m-4">
    <div class="col-12 p-xl-3 p-3 pt-4" style="background-color: rgba(246, 185, 81, 0.13); border-radius: 15px;">
        <div class="row">
            <div class="col-xl-4 text-center p-xl-4" ><img class="foto-berita" src="{{ asset('storage/images/berita/dummy-berita-1.png') }}" alt="logo berita1"></div>
            <div class="col-xl-8 pl-5 pt-5 pr-5"    >
                <p class="montserrat-semibold text-xl-left text-center" style="font-size: 22px; color: #195A94;">Sukses Pilkada Harus Kolaborasi Semua Pihak</p>
                <p class="montserrat-regular text-justify" style="font-size: 17px;">Get inspired by this revived W.H. Auden’s Hymn to the United Nations. "Let music for peace Be the paradigm, For peace means to change At the right time, As the World-Clock, Goes Tick and Tock. So may the story Of our human city Presently move
                </p>
            </div>
        </div>
    </div>
</div>
@endsection