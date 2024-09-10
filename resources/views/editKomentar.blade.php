@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center poppins-bold blue mb-3">Edit Komentar</h1>

    <form action="{{ route('komentar.update', $komentar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4 text-center">
            <textarea id="komentar" name="komentar" rows="2" class="form-control py-3 px-4" style="height: 200px; border-radius: 10px; border: 2px solid #162f50;" required>{{ $komentar->komentar }}</textarea>
        </div>

        
        <div class="mt-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary poppins-semibold px-3 py-2 me-5" style="background-color: #162f50; border-radius: 10px;">Update</button>
            <a href="{{ route('berita.detail', ['id' => $komentar->berita_id]) }}" class="btn btn-secondary  poppins-semibold px-3 py-2" style="background-color: #F6B951; border-radius: 10px;">Kembali</a>
        </div>
     </form>
</div>

@endsection