@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
<div class="row mt-4">
    <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Profil Pasangan Calon Kepala Daerah</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
        Dalam perjalanan menuju Pilkada, pengetahuan mendalam tentang calon pemimpin menjadi kunci. <br> Mari kita jelajahi profil lengkap dari setiap calon dengan cermat !
    </div>
    <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
        Pilih Daerahmu
    </div>
    <div class="col-lg-6 poppins-bold pe-xl-5 pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center" style="color: #162f50;">
         <form method="GET" action="{{ url('/paslon') }}" class="mb-4">
            <select name="daerah" class="form-select search-berita" onchange="this.form.submit()">
                <option value="">Pilih Daerah</option>
                @foreach($daerahs as $daerah)
                    <option value="{{ $daerah }}" {{ request('daerah') == $daerah ? 'selected' : '' }}>
                        {{ $daerah }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
</div>

<div class="row pl-4 pr-4 m-xl-5 m-4 mb-5 justify-content-center">
    @foreach($paslons as $paslon)
    
    <div class="mb-3 col-lg-4 col-12 pt-3 deskripsi-daftar-partai d-flex justify-content-center">
        <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px;">
             <div class="row pt-3">
                <div class="col-6 d-flex justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/KPU_Ahmad_Syaikhu.jpg/330px-KPU_Ahmad_Syaikhu.jpg" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Erwan_Setiawan.jpg" alt="Pemilih Edukatif" style="width: 100%; height: auto;" class="">
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title blue text-center poppins-bold" style="font-size: 23px;">{{ $paslon->kandidat->first()->nama }} - {{ $paslon->kandidat->last()->nama }}</h5>
                <div class="row pt-3 mt-auto">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ url('/paslon/' . $paslon->id) }}" class="btn montserrat-semibold px-3 py-2" style="background-color: #F6B951; color: white; border-radius: 8px; font-size: 13px;">
                            Selengkapnya
                            <img src="{{ asset('storage/images/element/vector-right.png') }}" class="ps-lg-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row text-center mt-lg-5 mt-1 py-5">
    <div class="col-12" style="overflow: hidden; position: relative;">
        <div class="starburst-yellow mt-5 "></div>
        <div class="row">
            <div class="col-12 poppins-extrabold mb-4 slogan-beranda blue">📜 KATEGORISASI VISI MISI 📜</div>
            <div class="col-12 poppins-extrabold mb-4 penjelasan-beranda">Jelajahi Visi Misi paslon Berdasarkan Kategori <br> Isu Yang Paling Penting Bagi Anda.</div>
            <div class="col-lg-12 pb-5 mb-5">
                <a href="{{ url('/kategorisasi') }}" class="btn poppins-bold px-4 penjelasan-beranda" style="background-color: #F6B951; color: white; border-radius: 15px;">Lihat, yuk!</a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
