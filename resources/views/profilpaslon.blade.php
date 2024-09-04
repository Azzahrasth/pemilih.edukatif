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
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ 'storage/images/partai/' . $partai->image }}" class="card-img-top" alt="{{ $partai->nama }}" style="max-width: 100px; height: 120px;">
                            <li>{{ 'storage/images/partai/' . $partai->image }}</li>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
</div>
        </div>
    </div>
</div>
@endsection
