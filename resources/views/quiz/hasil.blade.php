@extends('layouts.app')
@section('content')
<div class="container" style="padding: 50px 20px; max-width: 800px;">
    <div class="col-12 poppins-bold text-center" style="color: #162f50; margin-bottom: 30px; margin-top: 50px;">
        <h2>Hasil Quiz</h2>
    </div>

    <!-- Card Isu Utama -->
    <div class="col-12 d-flex justify-content-center mb-5">
        <div class="card" style="background: linear-gradient(to right, #162F50, #224370, #2D5890);; width: 300px; padding: 20px; border-radius: 15px; text-align: center; ">
            <div class="poppins-bold" style="color: white; margin-bottom: 10px;">
                Isu Utama
            </div>
            <div class="poppins-bold" style="font-size: 1.5rem; color: #F6B951;">
                Kesehatan
            </div>
        </div>
    </div>

    <!-- Deskripsi Hasil -->
    <div class="col-12 text-center mb-5">
        <div class="poppins" style="border: 2px solid #162f50; border-radius: 15px; padding: 20px; font-size: 1rem; color: #162f50; line-height: 1.7;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </div>
    </div>

    <!-- Button Navigasi -->
    <div class="d-flex justify-content-start mt-4 poppins-bold">
        <button type="button" class="btn" style="background-color: #162f50; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem;">Kembali</button>
    </div>
</div>
@endsection
