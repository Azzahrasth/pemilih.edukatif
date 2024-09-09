@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
<div class="row mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Profil Calon Kepala Daerah</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
        Dalam perjalanan menuju Pilkada, pengetahuan mendalam tentang calon pemimpin menjadi kunci. <br> Mari kita jelajahi profil lengkap dari setiap calon dengan cermat !
    </div>
    <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
        Pilih Daerahmu
    </div>
    <div class="col-lg-6 poppins-bold pe-xl-5 pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center" style="color: #162f50;">
        <form method="GET" action="{{ url('/kandidat') }}" class="mb-4">
            <select name="daerah" class="form-select search-berita" onchange="this.form.submit()">
                <option value="">Pilih Daerah</option>
                @foreach($daerahs as $daerah)
                    <option value="{{ $daerah }}" {{ request('daerah') == $daerah ? 'selected' : '' }}>
                        {{ $daerah }}
                    </option>
                @endforeach
            </select>
        </form>
        
        {{-- <form class="form-inline poppins-regular position-relative">
            <!-- Dropdown filter dengan style yang mirip search form -->
            <select class="form-control search-berita" aria-label="Filter" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                <option selected disabled>Pilih Filter</option>
                <option value="all">Semua Daerah</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Jakarta">Jakarta</option>
            </select>
            <!-- Ikon filter -->
            <span class="position-absolute top-50 translate-middle-y" style="left: 10px;">
                <i class="bi bi-funnel"></i>
            </span>
            <!-- Panah dropdown kustom -->
            <span class="position-absolute top-50 translate-middle-y" style="right: 15px;">
                <i class="bi bi-chevron-down"></i>
            </span>
        </form> --}}
    </div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5 justify-content-center">
    @foreach($kandidats as $kandidat)
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ 'storage/images/' . $kandidat->image }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">{{ $kandidat->nama }}</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/kandidat/' . $kandidat->id) }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/avatar.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Jeon Jungkook</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilkandidat') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/avatar.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Choi Yeonjun</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilkandidat') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/avatar.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Lalisa</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilkandidat') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/avatar.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Kim Taehyung</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilkandidat') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/avatar.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Choi Soobin</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilkandidat') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="row">
    <div class="col-lg-12 poppins-bold ps-xl-5 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Terkini</div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5">
    <div
        class="col-lg-4 col-12 col-12 pt-3 pt-sm-0 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4"
            style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 388px;">
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-1.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
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
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-1.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
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
            <img class="card-img-top mx-auto foto-terkini" src="{{ asset('storage/images/berita/dummy-terkini-2.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
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
</div>
@endsection
