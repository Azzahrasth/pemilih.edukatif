@extends('layouts.app')

@section('content')

<div class="row mt-lg-5 mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50">Berita Pilkada 2024</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951">Dapatkan berita terkini tentang para calon pemimpin daerah kita dan pilkada 2024</div>
    <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Populer</div>
    <div class="col-lg-6 poppins-bold pe-xl-5 pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center" style="color: #162f50;">
        <form class="form-inline poppins-regular position-relative">
            <input class="form-control pl-5 search-berita" type="search" placeholder="Cari Berita" aria-label="Search" style="padding-left: 2.5rem;">
            <span class="position-absolute top-50 translate-middle-y" style="left: 10px;">
                <i class="bi bi-search"></i>
            </span>
        </form>
    </div>
</div>

<div class="row m-xl-5 m-4">
    <div class="col-12 p-xl-3 p-3 pt-4" style="background-color: rgba(246, 185, 81, 0.13); border-radius: 15px;">
        <div class="row">
            <div class="col-xl-4 text-center p-xl-4"><img class="foto-list-berita" src="{{ asset('storage/images/berita/dummy-berita-1.png') }}" alt="logo berita1"></div>
            <div class="col-xl-8 ps-5 pt-xl-5 pt-3 pe-5">
                <p class="poppins-semibold text-xl-start text-center" style="font-size: 22px; color: #195A94;">Sukses Pilkada Harus Kolaborasi Semua Pihak</p>
                <p class="montserrat-regular" style="font-size: 17px; text-align: justify;">Get inspired by this revived W.H. Auden’s Hymn to the United Nations. "Let music for peace Be the paradigm, For peace means to change At the right time, As the World-Clock, Goes Tick and Tock. So may the story Of our human city Presently move
                </p>
                <div class="row pt-lg-5">
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center ps-lg-5 montserrat-regular"><img src="{{asset('storage/images/element/vector-calendar.png')}}" alt="Kalender" style="width: 20px; height: 20px;"><span class="ps-4">24 Okt 2024</span></div>
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center pt-lg-0 pt-2 montserrat-regular"><img src="{{asset('storage/images/element/vector-chat.png')}}" alt="Komentar" style="width: 20px; height: 20px;"><span class="ps-4">136 Komentar</span></div>
                    <div class="col-lg-4 text-lg-end pt-lg-0 pt-3 text-center poppins-semibold"><a href="{{ url('/detailberita') }}" class="btn align-items-center" style="background-color: #195A94; color: white; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row m-xl-5 m-4">
    <div class="col-12 p-xl-3 p-3 pt-4" style="background-color: rgba(246, 185, 81, 0.13); border-radius: 15px;">
        <div class="row">
            <div class="col-xl-4 text-center p-xl-4"><img class="foto-list-berita" src="{{ asset('storage/images/berita/dummy-berita-1.png') }}" alt="logo berita1"></div>
            <div class="col-xl-8 ps-5 pt-xl-5 pt-3 pe-5">
                <p class="poppins-semibold text-xl-start text-center" style="font-size: 22px; color: #195A94;">Menuju Pilkada 2024</p>
                <p class="montserrat-regular" style="font-size: 17px; text-align: justify;">Get inspired by this revived W.H. Auden’s Hymn to the United Nations. "Let music for peace Be the paradigm, For peace means to change At the right time, As the World-Clock, Goes Tick and Tock. So may the story Of our human city Presently move
                </p>
                <div class="row pt-lg-5">
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center ps-lg-5 montserrat-regular"><img src="{{asset('storage/images/element/vector-calendar.png')}}" alt="Kalender" style="width: 20px; height: 20px;"><span class="ps-4">24 Okt 2024</span></div>
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center pt-lg-0 pt-2 montserrat-regular"><img src="{{asset('storage/images/element/vector-chat.png')}}" alt="Komentar" style="width: 20px; height: 20px;"><span class="ps-4">136 Komentar</span></div>
                    <div class="col-lg-4 text-lg-end pt-lg-0 pt-3 text-center poppins-semibold"><a href="{{ url('/detailberita') }}" class="btn align-items-center" style="background-color: #195A94; color: white; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 poppins-bold ps-xl-5 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Terkini</div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5">
    <div
        class="col-lg-4 col-12 col-12 pt-3 pt-sm-0 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4"
            style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 388px;">
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-1.png') }}" alt="Card image cap" style="width: 100%; height: auto; border-radius: 8px;">
            <div class="card-body">
                <h5 class="card-title montserrat-semibold" style="font-size: 22px;">Peraturan Mencoblos pada Pilkada 2024</h5>
                <div class="row pt-3">
                    <div class="col-6 col-lg-5 d-flex align-items-center montserrat-regular"><i style="font-size: 20px;" class="bi bi-calendar2-event"></i><span class="ps-2" style="font-size: 13px;">24 Mei 2024</span></div>
                    <div class="col-6 col-lg-7 text-end justify-content-end d-flex align-items-center">
                        <a href="{{ url('/detailberita') }}" class="btn montserrat-semibold px-3 py-2"
                            style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="col-lg-4 col-12 pt-lg-0 pt-5 deskripsi-daftar-partai poppins-light d-flex justify-content-center">
        <div class="card p-4"
            style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 388px;">
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-1.png') }}" alt="Card image cap" style="width: 100%; height: auto; border-radius: 8px;">
            <div class="card-body">
                <h5 class="card-title montserrat-semibold" style="font-size: 22px;">Masa Puncak Kampanye Kandidat Pilkada 2024</h5>
                <div class="row pt-3">
                    <div class="col-6 col-lg-5 d-flex align-items-center montserrat-regular"><i style="font-size: 20px;" class="bi bi-calendar2-event"></i><span class="ps-2" style="font-size: 13px;">24 Mei 2024</span></div>
                    <div class="col-6 col-lg-7 text-end justify-content-end d-flex align-items-center">
                        <a href="{{ url('/detailberita') }}" class="btn montserrat-semibold px-3 py-2"
                            style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="col-lg-4 col-12 pt-lg-0 pt-5 pb-sm-0 pb-3 deskripsi-daftar-partai poppins-light  d-flex justify-content-center">
        <div class="card p-4"
            style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 388px;">
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-2.png') }}" alt="Card image cap" style="width: 100%; height: auto; border-radius: 8px;">
            <div class="card-body">
                <h5 class="card-title montserrat-semibold" style="font-size: 22px;">Hasil Kandidat Terpilih Pilkada 2024</h5>
                <div class="row pt-3">
                    <div class="col-6 col-lg-5 d-flex align-items-center montserrat-regular"><i style="font-size: 20px;" class="bi bi-calendar2-event"></i><span class="ps-2" style="font-size: 13px;">24 Mei 2024</span></div>
                    <div class="col-6 col-lg-7 text-end justify-content-end d-flex align-items-center">
                        <a href="{{ url('/detailberita') }}" class="btn montserrat-semibold px-3 py-2"
                            style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection