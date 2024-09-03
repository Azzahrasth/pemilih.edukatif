@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5">
    <div class="col-12 text-center"><img src="{{ $berita->image }}" style="border-radius: 8px;" alt="Foto Berita" style="height: auto;" class="foto-berita"></div>
    <div class="col-12 pt-4 ps-lg-6 ps-4">
        <span class="d-flex align-items-center montserrat-regular" style="color: #747474;"><img src="{{ asset('storage/images/element/vector-calendar.png') }}" class="ps-lg-2 pe-2"> {{$berita->tanggal_berita}} |<img src="{{ asset('storage/images/element/vector-chat.png') }}" class="ps-lg-2 ps-1 pe-2"> {{$berita->komentar}} Komentar</span>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 poppins-bold judul-detail-berita" style="color: #162F50;">{{$berita->judul}}</div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-light deskripsi-detail-berita">
        <span>{{$berita->berita}}</span>
        <!-- <p>Pemilihan Umum (Pemilu) akan dilaksanakan pada tanggal 14 Februari 2024 secara serentak. Semua Warga Negara Indonesia (WNI) yang memenuhi syarat diwajibkan melakukan pencoblosan di Tempat Pemungutan Suara (TPS) yang sudah ditentukan.</p> -->
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-regular" style="font-size: 20px; color: #747474;">
        <p>SUMBER : BERITA KPU</p>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-semibold" style="font-size: 32px;">
        <p>KOMENTAR</p>
    </div>
    <div class="col-12 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-semibold" style="font-size: 32px;">
        <form action="">
            <div class="position-relative mb-3">
                <textarea class="form-control poppins-medium" id="exampleFormControlTextarea1" rows="3" placeholder="Tambahkan Komentar..." style="resize: none; background-color: #F6B951; border-radius: 15px; padding-right: 160px;"></textarea>
                <button type="submit" class="btn btn position-absolute px-5 py-2" style="background-color: #162F50; right: 15px; top: 50%; transform: translateY(-50%); color: white; border-radius: 15px;">Kirim</button>
            </div>
        </form>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-regular" style="font-size: 20px;">
        <p class="d-flex align-items-center">
            <img src="{{ asset('storage/images/element/vector-chat.png') }}" class="ps-lg-2 ps-2 pe-3"> {{$berita->komentar}} Komentar
        </p>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4" style="font-size: 20px;">
        @foreach($komentars as $komentar)
        <div class="row m-1 p-2" style="background-color: #BAD7E9; border-radius: 15px;">
            <div class="col-lg-1 col-3 text-center"><img src="{{ asset('storage/images/element/vector-people.png') }}" class="ps-lg-2 ps-2 pe-3 foto-profil-berita"></div>
            <div class="col-lg-11 col-9 ps-lg-5 ps-0 pt-lg-3">
                <div>
                    <div class="poppins-semibold">{{$komentar->nama}}</div>
                    <div class="poppins-light">{{$komentar->komentar}}</div>
                    <div class="montserrat-regular text-end" style="font-size: 15px; color: #747474;">31 Agustus 2024</div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="row m-1 mt-lg-2 mt-3 p-2" style="background-color: #BAD7E9; border-radius: 15px;">
            <div class="col-lg-1 col-3 text-center"><img src="{{ asset('storage/images/element/vector-people.png') }}" class="ps-lg-2 ps-2 pe-3 foto-profil-berita"></div>
            <div class="col-lg-11 col-9 ps-lg-5 ps-0 pt-lg-3">
                <div>
                    <div class="poppins-semibold">Jule</div>
                    <div class="poppins-light">Jangan pada golput yach..</div>
                    <div class="montserrat-regular text-end" style="font-size: 15px; color: #747474;">31 Agustus 2024</div>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection