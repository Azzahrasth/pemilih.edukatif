@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Pasangan Calon Kepala Daerah</h1>
        <img src="{{ asset('storage/images/' . $paslon->image) }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <h2 class="poppins-bold">{{ $paslon->nama }}</h2> </br>
                
        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Visi Misi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($paslon->kategorisasi as $kategori)
                    <li>{{ $kategori->visi_misi }}</li>
                @endforeach                
            </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Motivasi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 {{ $paslon->motivasi }}
            </p> </br>
        </div>

        @php
            // Memisahkan string menjadi array berdasarkan tanda '$'
            $targetSasaranList = explode('$', $paslon->target_sasaran);
        @endphp
        
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Target Sasaran</h4>
            <ol class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($targetSasaranList as $target)
                    <li>{{ $target }}</li>
                @endforeach
            </ol> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Partai Pengusung</h4>
            <div class="container my-5">
            <div class="row justify-content-left">
                @foreach($paslon->pengusung as $partai)
                <div class="col-md-3">
                    <div class="card text-center custom-card">
                        <a href="{{ url('/partai/' . $partai->id) }}" class="d-block">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('storage/images/partai/' . $partai->image) }}" class="card-img-top" alt="{{ $partai->nama }}" style="max-width: 100px; height: 120px;">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
       <div>
           <h4 class="poppins-bold" style=" text-align: justify;">Kandidat</h4>
            <div class="container my-5">
                <div class="row">
                    @foreach($kandidats as $kandidat)
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src={{ asset('storage/images/' . $kandidat->image) }} class="card-img-top" alt="Kim Jennie" style="width: 100px; height: 100px; margin: 0 auto;">
                                <h5 class="card-title mt-3">{{ $kandidat->nama }}</h5>
                                 <div class="col-12 d-flex justify-content-center align-items-center">
                                    <a href="{{ url('/kandidat/' . $kandidat->id) }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                                        Selengkapnya
                                        <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="storage/images/tentangkami/member2.png" class="card-img-top" alt="Kim Taehyung" style="width: 100px; height: 100px; margin: 0 auto;">
                                <h5 class="card-title mt-3">Kim Taehyung</h5>
                                <a href="#" class="btn btn-link text-warning">Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
