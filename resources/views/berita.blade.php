@extends('layouts.app')

@section('content')
<style>
    .limited-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<div class="row mt-lg-5 mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50">Berita Pilkada 2024</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951">Dapatkan berita terkini tentang para calon pemimpin daerah kita dan pilkada 2024</div>
    
    <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Populer</div>
    <div class="col-lg-6 poppins-bold pe-xl-5 pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center" style="color: #162f50;">
        <form class="form-inline poppins-regular position-relative" method="get" action="{{ route('berita.search') }}">
            <input class="form-control pl-5 search-berita" name="search" type="search" placeholder="Cari Berita" aria-label="Search" style="padding-left: 2.5rem;">
            <span class="position-absolute top-50 translate-middle-y" style="left: 10px;">
                <i class="bi bi-search"></i>
            </span>
        </form>
    </div>
</div>

@if($beritas->isEmpty())
<div class="row m-xl-5 m-4">
    <div class="col-12 p-3 text-center">
        <p class="poppins-semibold" style="font-size: 22px; color: #bb4129;">- Berita tidak ada -</p>
    </div>
</div>
@else
@foreach($beritas as $berita)
<div class="row m-xl-5 m-4">
    <div class="col-12 p-xl-3 p-3 pt-4" style="background-color: rgba(246, 185, 81, 0.13); border-radius: 15px;">
        <div class="row">
            <div class="col-xl-4 text-center p-xl-4"><img class="foto-list-berita" src="{{ $berita->image }}" style="border-radius: 8px;" alt="logo berita1"></div>
            <div class="col-xl-8 ps-5 pt-xl-5 pt-3 pe-5">
                <p class="poppins-semibold text-xl-start text-center" style="font-size: 22px; color: #195A94;">{{ $berita->judul }}</p>
                <p class="montserrat-regular limited-text" style="font-size: 17px; text-align: justify;">
                    {{ str_replace('$', '', $berita->berita) }}
                </p>                
                <div class="row pt-lg-3">
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center ps-lg-5 montserrat-regular">
                        <img src="{{asset('storage/images/element/vector-calendar.png')}}" alt="Kalender" style="width: 20px; height: 20px;">
                        <span class="ps-4">{{ $berita->tanggal_berita}}</span>
                    </div>
                    <div class="d-flex align-items-center col-lg-4 text-lg-start text-center pt-lg-0 pt-2 montserrat-regular">
                        <img src="{{asset('storage/images/element/vector-chat.png')}}" alt="Komentar" style="width: 20px; height: 20px;">
                        <span class="ps-4">{{$berita->komentar->count()}} Komentar</span>
                    </div>
                    <div class="col-lg-4 text-lg-end pt-lg-0 pt-3 text-center poppins-semibold">
                        <a href="{{ url('/berita/' . $berita->id) }}" class="btn align-items-center" style="background-color: #195A94; color: white; font-size: 13px;">Selengkapnya<img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

<div class="row">
    <div class="col-lg-12 poppins-bold ps-xl-5 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">Berita Terkini</div>
</div>

@if($beritas_terkini->isEmpty())
<div class="row m-xl-5 m-4">
    <div class="col-12 p-3 text-center">
        <p class="poppins-semibold" style="font-size: 22px; color: #bb4129;">- Berita tidak ada -</p>
    </div>
</div>
@else
<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5">
    @foreach($beritas_terkini as $berita)
    <div class="col-lg-4 col-12 pt-3 pt-sm-0 deskripsi-daftar-partai d-flex justify-content-center mb-4">
        <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px;">
            <div style="width: 100%; height: 230px; overflow: hidden; border-radius: 8px;">
                <img class="card-img-top mx-auto foto-terkini" src="{{ $berita->image }}" alt="Card image cap" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" onerror="this.onerror=null;this.src='{{ asset('storage/images/berita/dummy-terkini-1.png') }}';">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title montserrat-semibold limited-text" style="font-size: 18px;">{{ $berita->judul }}</h5>
                <div class="row pt-3">
                    <div class="col-6 col-lg-6 d-flex align-items-center montserrat-regular">
                        <i style="font-size: 10px;" class="bi bi-calendar2-event"></i>
                        <span class="ps-2" style="font-size: 13px;">{{ $berita->tanggal_berita }}</span>
                    </div>
                    <div class="col-6 col-lg-6 text-end d-flex justify-content-end align-items-center">
                        <a href="{{ url('/berita/' . $berita->id) }}" class="btn montserrat-semibold " style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 10px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
