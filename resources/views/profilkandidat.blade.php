@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Calon Kepala Daerah</h1>
        <img src="{{ asset('storage/images/' . $kandidat->image) }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
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
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Pendidikan</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $kandidat->pendidikan }} </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Jejak Karir</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $kandidat->jejak_karir }} </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Prestasi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $kandidat->prestasi }} </p></br>
        </div>
        <div>            
            <h4 class="poppins-bold" style=" text-align: justify;">Riwayat Organisasi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $kandidat->organisasi }} </p> </br>
        </div>
        <div>            
            <h4 class="poppins-bold" style=" text-align: justify;">Kontroversi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $kandidat->kontroversi }} </p> </br>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 text-center">
            <h2 class="poppins-bold" style="color: #162f50; font-size: 36px; text-align: left">Kandidat Lainnya</h2>
            <div class="container my-5">
                <div class="row">
                    @foreach($datas as $data)
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src={{ asset('storage/images/' . $data->image) }} class="card-img-top" alt="Kim Jennie" style="width: 100px; height: 100px; margin: 0 auto;">
                                <h5 class="card-title mt-3">{{ $data->nama }}</h5>
                                <a href="{{ url('/kandidat/' . $data->id) }}" class="btn btn-link text-warning">Selengkapnya &rarr;</a>
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
