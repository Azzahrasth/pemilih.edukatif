@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <h1 class="poppins-bold" style="color: #162f50; font-size: 36px;">Profil Pasangan Calon Kepala Daerah</h1>
        <div class="container my-5 justify-content-center">
            <div class="row d-flex justify-content-center">
                @foreach($kandidats as $kandidat)
                    <div class="col-md-3 d-flex align-items-stretch mb-4">
                        <div class="card text-center" style="width: 100%; height: 100%; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="mb-3" style="width: 100%; height: 200px; overflow: hidden;">
                                    <img src="{{ $kandidat->image }}" class="card-img-top" alt="Image of {{ $kandidat->nama }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <a href="{{ url('/kandidat/' . $kandidat->id) }}" class="mt-auto">
                                    <h5 class="card-title blue text-center poppins-bold mt-3" style="font-size: 18px; margin: 0 auto;">{{ $kandidat->nama }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Daerah</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $paslon->daerah }} </p></br>
        </div>
        <div>
        <h4 class="poppins-bold" style="text-align: justify;">Visi</h4>
        
            @foreach($visi as $v)
                <p class="poppins-regular" style="font-size: 20px; text-align: justify;"> {{ $v->visi_misi}} </p></br>
            @endforeach                
            
        </div>

        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Misi</h4>
            <ol class="poppins-regular" style="font-size: 20px; text-align: justify;">
                @foreach($misi as $m)
                    <li>{{ $m->visi_misi }}</li>
                @endforeach                
            </ol>
        </div>


        {{-- @php
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
        </div> --}}
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
    </div>
</div>
@endsection
