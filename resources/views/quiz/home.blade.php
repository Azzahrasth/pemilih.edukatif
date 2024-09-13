@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-between align-items-center" style="padding: 20px;">
    <div class="left" style="flex: 1; padding-right: 20px;">
        <div class="col-12 poppins-bold text-left judul-berita" style="color: #162f50; margin-bottom: 15px; margin-top: 50px;">Quiz</div>
        <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-left deskripsi-berita" style="color: #162f50; margin-bottom: 15px;">
            Dapatkan berita terkini tentang para calon pemimpin daerah kita dan pilkada 2024
        </div>
        <div class="col-lg-12 mb-5" style="margin-bottom: 15px;">
            <a href="{{route('quiz.soal')}}" class="btn poppins-bold px-4 penjelasan-beranda" style="background-color: #F6B951; color: white; border-radius: 15px;">Cobain, yuk!</a>
        </div>
        
    </div>
    <div class="right" style="flex: 1; display: flex; justify-content: center; margin-top: 150px;">
        <img src="{{'storage/images/quiz/iconquiz.png'}}" alt="Quiz Image" style="max-width: 100%; height: auto;">
    </div>
</div>

@endsection