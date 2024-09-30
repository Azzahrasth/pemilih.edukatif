@extends('layouts.app')

@section('content')
<div class="container" style="padding: 50px 20px; max-width: 800px;">
    <div class="col-12 poppins-bold text-center" style="color: #162f50; margin-bottom: 30px; margin-top: 50px;">
        <h2>Hasil Quiz</h2>
    </div>

    <!-- Card Isu Utama -->
    <div class="col-12 d-flex justify-content-center mb-5">
        <div class="card" style="background: linear-gradient(to right, #162F50, #224370, #2D5890); width: 300px; padding: 20px; border-radius: 15px; text-align: center;">
            <div class="poppins-bold" style="color: white; margin-bottom: 10px;">
                Isu Utama
            </div>
            <div class="poppins-bold" style="font-size: 1.5rem; color: #F6B951;">
                @foreach($topCategories as $category)
                    <strong>{{ $category }}</strong>@if(!$loop->last), @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Deskripsi Hasil -->
    <div class="col-12 text-center mb-5">
        <div class="poppins" style="border: 2px solid #162f50; border-radius: 15px; padding: 20px; font-size: 1rem; color: #162f50; line-height: 1.7;">
            Berdasarkan hasil kuis yang Anda kerjakan, dapat disimpulkan bahwa Anda memberikan perhatian paling besar terhadap isu <strong>{{ $topCategories[0] }}</strong>. Isu ini tampaknya menjadi prioritas utama dalam preferensi Anda. Selain itu, isu <strong>{{ $topCategories[1] }}</strong> juga mendapat perhatian signifikan dari Anda, meskipun berada di urutan kedua. Terakhir, isu <strong>{{ $topCategories[2] }}</strong> menempati urutan ketiga sebagai isu yang Anda anggap penting.
        </div>
    </div>
</div>
@endsection
