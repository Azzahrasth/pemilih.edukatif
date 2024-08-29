@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
<div class="row mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Daftar Partai di Indonesia</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
        Dalam perjalanan menuju Pilkada, pengetahuan mendalam tentang calon pemimpin menjadi kunci. <br> Mari kita jelajahi profil lengkap dari setiap partai dengan cermat !
    </div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5">
    <div class="col-lg-4 col-12 pt-3 mb-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-3" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 300px;">
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pks.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Keadilan Sejahtera</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/gerindra.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Gerakan Indonesai Raya</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pdip.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Demokrasi Indonesia Perjuangan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pkb.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Kebangkitan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pks.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Keadilan Sejahtera</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/gerindra.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Gerakan Indonesai Raya</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pdip.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Demokrasi Indonesia Perjuangan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pkb.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Kebangkitan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pks.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Keadilan Sejahtera</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/gerindra.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Gerakan Indonesai Raya</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pdip.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Demokrasi Indonesia Perjuangan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
            <img class="card-img-top mx-auto" src="{{ asset('storage/images/partai/pkb.png') }}" alt="Card image cap" style="width: 100%; height: auto; max-height: 260px; border-radius: 8px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 26px;">Partai Kebangkitan</h5>
                <div class="row pt-2 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/profilpartai') }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
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
