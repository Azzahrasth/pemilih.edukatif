@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Calon Kepala Daerah</h1>
        <img src="{{ $kandidat->image }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <h2 class="poppins-bold">{{ $kandidat->nama }}</h2> </br>
        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Tempat & Tanggal Lahir</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $kandidat->tempat_lahir }}, {{ $kandidat->tanggal_lahir }}
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Umur</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $umur }}
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Latar Belakang</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $kandidat->latar_belakang }}
            </p> </br>
        </div>

        @php
            // Memisahkan string menjadi array berdasarkan tanda '$'
            $pendidikanList = explode('$', $kandidat->pendidikan);
            $karirList = explode('$', $kandidat->jejak_karir);
            $prestasiList = explode('$', $kandidat->prestasi);
            $organisasiList = explode('$', $kandidat->organisasi);
        @endphp
        
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Pendidikan</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($pendidikanList as $pendidikan)
                    <li>{{ $pendidikan }}</li>
                @endforeach
            </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Jejak Karir</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($karirList as $karir)
                    <li>{{ $karir }}</li>
                @endforeach
            </ul> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Prestasi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($prestasiList as $prestasi)
                    <li>{{ $prestasi }}</li>
                @endforeach
            </ul> </br>
        </div>
        <div>            
            <h4 class="poppins-bold" style=" text-align: justify;">Riwayat Organisasi</h4>
            <ul class="poppins-regular" style="font-size: 20px; text-align: justify;">
                 @foreach($organisasiList as $organisasi)
                    <li>{{ $organisasi }}</li>
                @endforeach
            </ul> </br>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 text-center">
            <h2 class="poppins-bold" style="color: #162f50; font-size: 36px; text-align: left">Kandidat Lainnya</h2>
            <div class="container my-5">
                <div class="row">
                    @foreach($datas as $data)
                        @if($data->paslon->daerah == $daerah && $data->id != $kandidat->id)
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{  $data->image }}" class="card-img-top" alt="Image" style="width: 100px; height: 100px; margin: 0 auto;">
                                        <h5 class="card-title mt-3">{{ $data->nama }}</h5>
                                        <div class="col-12 d-flex justify-content-center align-items-center">
                                            <a href="{{ url('/kandidat/' . $data->id) }}" class="btn montserrat-semibold px-3 py-1" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                                                Selengkapnya
                                                <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>            
        </div>
    </div>

</div>
@endsection
