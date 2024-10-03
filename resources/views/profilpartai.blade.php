@extends('layouts.app')

@section('content')
<div class="row mt-lg-5 mt-4 mb-5 justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
        <img src="{{ asset($partai->image) }}" alt="Pemilih Edukatif" style="max-width: 250px;" class="my-4">
        <h2 class="poppins-bold">{{ $partai->nama }}</h2> </br>
        <div>
            <h4 class="poppins-bold" style="text-align: justify;">Deskripsi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $partai->deskripsi }}
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Ketua Umum</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $partai->ketua_umum }}
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Tanggal Dibentuk</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $partai->tanggal_dibentuk }}
            </p> </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Sejarah</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {!! nl2br(e(str_replace('$', "\n\n", $partai->sejarah))) !!}
            </p> 
            </br>
        </div>
        <div>
            <h4 class="poppins-bold" style=" text-align: justify;">Ideologi</h4>
            <p class="poppins-regular" style="font-size: 20px; text-align: justify;">
                {{ $partai->ideologi }}
            </p> </br>
        </div>
    </div>
</div>
@endsection
