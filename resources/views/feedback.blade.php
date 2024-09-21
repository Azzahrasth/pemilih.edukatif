@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center poppins-bold blue mb-3">Masukan</h1>
    <p class="text-center poppins-bold text-center deskripsi-berita yellow mb-4">
        Kami sangat menghargai setiap masukan yang Sobat Pemilih berikan untuk meningkatkan layanan kami.
    </p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="mt-5 mb-4 text-center">
            <label for="jenisMasukan" class="form-label poppins-semibold blue"><h5>Jenis Masukan:</h5></label>
            <select id="jenisMasukan" name="jenis_masukan" class="form-select mx-auto d-block" style="width: 10rem;  border-radius: 10px; border: 2px solid #162f50;" required>
                <option value="" disabled selected>Pilih Fitur</option>
                <option value="Berita">Berita</option>
                <option value="Chatbot">Chatbot</option>
                <option value="Gubernur">Gubernur</option>
                <option value="Kandidat">Kandidat</option>
                <option value="Kuis">Kuis</option>
                <option value="Partai">Partai</option>
            </select>
        </div>


        <div class="mb-4 text-center">
            <label for="deskripsi" class="mt-2 form-label poppins-semibold blue"><h5>Deskripsi:</h5></label>
            <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control" style="height: 200px; border-radius: 10px; border: 2px solid #162f50;" required></textarea>
        </div>

        <div class="mb-4 text-center">
            <label class=" form-label poppins-semibold blue"><h5>Penilaian:</h5></label>
             <div class="star-rating text-center">
                <input type="radio" id="star5" name="rating" value="5" />
                <label for="star5" title="bintang 5 ">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star4" title="bintang 4 ">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star3" title="bintang 3 ">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star2" title="bintang 2 ">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star1" title="1 star">&#9733;</label>
            </div>
        </div>

        {{-- <div class="mb-4 text-center">
            <label for="lampiran" class=" form-label poppins-semibold blue"><h5>Lampiran:</h5></label>
            <div class="input-group mx-auto"  style="width: 25rem; border-radius: 10px; border: 2px solid #162f50;">
                <span class="input-group-text my-1 mx-2"  style="border-radius: 20px; background-color: #162f50; color:white;" >
                    <i class="bi bi-upload"></i>
                </span>
                <input type="file" id="lampiran" name="lampiran" class="my-1 form-select mx-auto d-block" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
            </div>
        </div> --}}

        <div class="mt-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary poppins-semibold px-5 py-2 me-5" style="background-color: #162f50; border-radius: 10px;">Kirim</button>
            {{-- <button type="reset" class="btn btn-danger poppins-semibold py-2 px-5" style=" border-radius: 10px;">Batal</button> --}}
            <button type="reset" class="btn btn-danger poppins-semibold py-2 px-5" style=" border-radius: 10px;"  onclick="window.location.href='{{ route('tentangkami') }}';">Batal</button>
        </div>
    </form>
</div>

@endsection
