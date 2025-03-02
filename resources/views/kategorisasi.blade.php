@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 my-3">
    <div class="row mt-4">
        <div class="col-12 poppins-bold text-center judul-berita" style="color: #162f50;">Kategorisasi Visi Misi</div>
        <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-center deskripsi-berita" style="color: #F6B951;">
            Pasangan Calon Gubernur PILKADA 2024
        </div>

        <form class="form-inline poppins-regular position-relative" method="GET" action="{{ url('/kategorisasi') }}">
            <div class="row w-100 m-0">
                <!-- Pilih Daerah -->
                <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-5 pt-3 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
                    Pilih Daerah
                </div>
                <div class="col-lg-6 poppins-bold pt-lg-5 pt-2 d-flex justify-content-lg-end justify-content-center position-relative" style="color: #162f50;">
                    <select name="daerah" class="form-select search-berita" onchange="this.form.submit()">
                        <option value="">Pilih Daerah</option>
                        @foreach($daerahs as $daerah)
                            <option value="{{ $daerah }}" {{ request('daerah') == $daerah ? 'selected' : '' }}>
                                {{ $daerah }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Pilih Kategori -->
            <div class="col-lg-6 poppins-bold ps-xl-5 pt-lg-3 pt-2 mt-lg-1 mt-sm-4 d-flex justify-content-lg-start justify-content-center berita-populer" style="color: #162f50;">
                Pilih Kategori
            </div>
            <div class="col-lg-6 poppins-bold pt-lg-3 pt-2 d-flex mt-lg-1 justify-content-lg-end justify-content-center position-relative" style="color: #162f50;">
                <select id="kategori" name="kategori" class="form-select search-berita" required>
                    <option value="" disabled {{ request('kategori') ? '' : 'selected' }}>Pilih Kategori</option>
                    <option value="budaya" {{ request('kategori') == 'budaya' ? 'selected' : '' }}>Budaya</option>
                    <option value="ekonomi" {{ request('kategori') == 'ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                    <option value="keamanan dan pertahanan" {{ request('kategori') == 'keamanan dan pertahanan' ? 'selected' : '' }}>Keamanan dan Pertahanan</option>
                    <option value="kesehatan" {{ request('kategori') == 'kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                    <option value="pendidikan" {{ request('kategori') == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                    <option value="infrastruktur" {{ request('kategori') == 'infrastruktur' ? 'selected' : '' }}>Infrastruktur</option>
                    <option value="teknologi" {{ request('kategori') == 'teknologi' ? 'selected' : '' }}>Teknologi</option>
                    <option value="lingkungan" {{ request('kategori') == 'lingkungan' ? 'selected' : '' }}>Lingkungan</option>
                </select>
            </div>

            </div>

            <!-- Submit Button -->
            <div class="row w-100 m-0 mt-lg-1 mt-sm-4">
                <div class="col-12 d-flex justify-content-center">
                    <button type="Submit" class="btn poppins-bold px-4" style="background-color: #162f50; color: white; border-radius: 15px; height: 48px;">Submit</button>
                </div>
            </div>
        </form>
    </div>

    @if(isset($message))
        <div class="row text-center mt-1 mb-4 py-5">
            <div class="col-12" style="overflow: hidden; position: relative;">
                <div class="col-12 py-4 poppins-extrabold mb-5 mt-1 penjelasan-beranda" style="
                    color: #882121; 
                    font-size: 25px; 
                    background-color: #fff4e5; 
                    border: 2px solid #882121; 
                    border-radius: 8px; 
                    padding: 20px; 
                    box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
                    text-align: center;
                ">
                    Masukan Daerah dan Kategori terlebih dahulu yaa!
                </div>
            </div>
        </div>
    @else
        <div class="row pl-4 pr-4 m-xl-5 m-4 mb-5 justify-content-center">
    @foreach($paslons as $paslon)
        <div class="col-lg-4 col-12 pt-3 deskripsi-daftar-partai d-flex justify-content-center">
            <div class="card p-4" style="box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border-radius: 8px; width: 100%; max-width: 388px; height: 100%;">
                <div class="row pt-3">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <div style="width: 100%; height: 160px; overflow: hidden; border-radius: 8px;">
                            <img src="{{ $paslon->kandidat->first()->image }}" alt="Pemilih Edukatif" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <div style="width: 100%; height: 160px; overflow: hidden; border-radius: 8px;">
                            <img src="{{ $paslon->kandidat->last()->image }}" alt="Pemilih Edukatif" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title blue text-center poppins-bold" style="font-size: 20px; margin: 0;">{{ $paslon->kandidat->first()->nama }}</h5>
                    {{-- <h5 class="card-title text-center poppins-bold" style="font-size: 23px; margin: 0;">-</h5> --}}
                    <h5 class="card-title yellow text-center poppins-bold mb-3" style="font-size: 20px; margin: 0;">{{ $paslon->kandidat->last()->nama }}</h5>
                    <ul style="color: #162f50; font-size: 16px;" class="poppins-regular">
                        @foreach($paslon->kategorisasi as $kategorisasi)
                            <li>{{ $kategorisasi->visi_misi }}</li>
                        @endforeach
                    </ul>
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

    @endif
</div>
@endsection
