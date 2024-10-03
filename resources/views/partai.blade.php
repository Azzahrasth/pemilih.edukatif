@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
<div class="row mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Daftar Partai di Indonesia</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
        Dalam perjalanan menuju Pilkada, pengetahuan mendalam tentang calon pemimpin menjadi kunci. <br> Mari kita jelajahi profil lengkap dari setiap partai dengan cermat !
    </div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5 justify-content-center">
    @foreach($partais as $partai)
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <div class="card-img-top mx-auto d-flex align-items-center justify-content-center" style="width: 100%; height: 200px; overflow: hidden; border-radius: 8px;">
                <img src="{{ $partai->image }}" alt="Card image cap" style="max-width: 100%; max-height: 100%; object-fit: contain;">
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 20px;">{{ $partai->singkatan}}</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/partai/' . $partai->id) }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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

</div>
@endsection
