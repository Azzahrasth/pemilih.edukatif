@extends('layouts.app')

@section('content')

<div class="row mt-lg-5 mt-4 mb-5">
    <div class="col-12 text-center"><img src="{{ $berita->image }}" style="border-radius: 8px;" alt="Foto Berita" style="height: auto;" class="foto-berita"></div>
    <div class="col-12 pt-4 ps-lg-6 ps-4">
        <span class="d-flex align-items-center montserrat-regular" style="color: #747474;"><img src="{{ asset('storage/images/element/vector-calendar.png') }}" class="ps-lg-2 pe-2"> {{$berita->tanggal_berita}} |<img src="{{ asset('storage/images/element/vector-chat.png') }}" class="ps-lg-2 ps-1 pe-2"> {{$berita->komentar->count()}} Komentar</span>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 poppins-bold judul-detail-berita" style="color: #162F50;">{{$berita->judul}}</div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-light deskripsi-detail-berita">
        <span>{{$berita->berita}}</span>
        <!-- <p>Pemilihan Umum (Pemilu) akan dilaksanakan pada tanggal 14 Februari 2024 secara serentak. Semua Warga Negara Indonesia (WNI) yang memenuhi syarat diwajibkan melakukan pencoblosan di Tempat Pemungutan Suara (TPS) yang sudah ditentukan.</p> -->
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-regular" style="font-size: 20px; color: #747474;">
        <p>SUMBER : BERITA KPU</p>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4">
        @if(session('success'))
        <div class="mt-4 alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-semibold" style="font-size: 32px;">
        <p>KOMENTAR</p>
    </div>
    <div class="col-12 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-semibold" style="font-size: 32px;">
        <form action="{{ route('komentar.store') }}" method="post">
            @csrf
            <div class="position-relative pt-2 mb-3">
                <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                <textarea class="form-control poppins-medium pt-4" name="komentar" id="exampleFormControlTextarea1" rows="3" placeholder="Tambahkan Komentar..." style="resize: none; background-color: #F6B951; border-radius: 15px; padding-right: 160px;"></textarea>
                <button type="submit" class="btn btn position-absolute px-5 py-2" style="background-color: #162F50; right: 15px; top: 50%; transform: translateY(-50%); color: white; border-radius: 15px;">Kirim</button>
            </div>
        </form>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4 poppins-regular" style="font-size: 20px;">
        <p class="d-flex align-items-center">
            <img src="{{ asset('storage/images/element/vector-chat.png') }}" class="ps-lg-2 ps-2 pe-3"> {{$berita->komentar->count()}} Komentar
        </p>
    </div>
    <div class="col-12 pt-2 ps-lg-6 ps-4 pe-lg-6 pe-4" style="font-size: 20px;">
    @foreach($komentars as $komentar)
    <div class="row m-1 p-2 mb-3" style="background-color: #BAD7E9; border-radius: 15px;">
        <div class="col-lg-1 col-3 text-center"><img src="{{ asset('storage/images/element/vector-people.png') }}" class="ps-lg-2 ps-2 pe-3 foto-profil-berita"></div>
        <div class="col-lg-11 col-9 ps-lg-5 ps-0 pt-lg-3">
            <div>
                <div class="poppins-semibold">{{$komentar->user->name}}</div>
                <div class="poppins-light">{{$komentar->komentar}}</div>

                <!-- Jika user login adalah pemilik komentar, tampilkan tombol Edit dan Delete -->
                @if(Auth::check() && Auth::user()->id == $komentar->user_id)
                <div class="d-flex justify-content-end">
                    <!-- Tombol Edit -->
                    <a href="{{ route('komentar.edit', $komentar->id) }}" class="btn btn-sm me-2 pt-2"  style="background-color: #162F50; color:white; height:37px; width:55px">Edit</a>
                    
                    <!-- Tombol Delete -->
                    <form action="{{ route('komentar.delete', $komentar->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm " style=" height:37px;">Delete</button>
                    </form>
                </div>
                @endif

                <div class="montserrat-regular text-end mt-2" style="font-size: 15px; color: #747474;">{{ \Carbon\Carbon::parse($komentar->created_at)->format('d F Y') }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>
@endsection