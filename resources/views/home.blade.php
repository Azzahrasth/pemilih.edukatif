@extends('layouts.app')

@section('content')
<div class="row p-lg-5 p-2" style="background-color: #162F50; border-radius: 0 0 15% 15%;">
    <div class="col-lg-7 col-12 p-lg-5 p-3 order-2 order-xl-1 text-lg-start text-center" style="border-radius: 15px; overflow: hidden; position: relative;">
        <div class="starburst"></div>
        <div class="row">
            <div class="col-lg-12 poppins-extrabold slogan-beranda" style="color: white;">MENUJU PILKADA SERENTAK 2024</div>
            <div class="col-lg-12 poppins-regular" style="font-size: 29px; color: white;">Suara Kita, Masa Depan Bangsa!</div>
            <div class="col-lg-12 pt-3">
                <a href="/kandidat" class="btn poppins-bold px-4" style="background-color: #F6B951; color: white; font-size: 29px; border-radius: 15px;">Kenali Calon</a>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-12 order-1 order-xl-2 text-lg-start text-center"><img src="{{ asset('storage/images/beranda/headline-beranda.png')}}" alt="Foto Beranda" class="foto-beranda"></div>
</div>

<div class="row countdown-timer p-3 poppins-bold my-lg-4 my-1">
    <div class="col text-center">
        <div class="count-box position-relative">
            <span id="days" class="count-number">5</span>
            <div class="separator"></div>
        </div>
        <div class="count-label mt-2">Hari</div>
    </div>
    <div class="col text-center">
        <div class="count-box position-relative">
            <span id="hours" class="count-number">20</span>
            <div class="separator"></div>
        </div>
        <div class="count-label mt-2">Jam</div>
    </div>
    <div class="col text-center">
        <div class="count-box position-relative">
            <span id="minutes" class="count-number">12</span>
            <div class="separator"></div>
        </div>
        <div class="count-label mt-2">Menit</div>
    </div>
    <div class="col text-center">
        <div class="count-box">
            <span id="seconds" class="count-number">7</span>
            <div class="separator"></div>
        </div>
        <div class="count-label mt-2">Detik</div>
    </div>
</div>

<div class="row p-3 mx-5">
    <div class="col-12 poppins-extrabold text-lg-start text-center judul-beranda">Apa itu Pilkada?</div>
</div>

<div class="row p-3 mb-4 mx-5 justify-content-center" style="background-color: #F1F1F1; border-radius: 20px;">
    <div class="col-12 poppins-bold p-lg-4 p-2 pb-0 my-4 mb-0 text-center" style="color: #162F50;">
        <p class="penjelasan-beranda">Pemilihan Kepala Daerah yang diadakan untuk <span style="color: #F6B951;">memilih</span> kepala daerah beserta wakilnya di tingkat <span style="color: #F6B951;">provinsi</span> (gubernur), <span style="color: #F6B951;">kota</span> (wali kota), dan <span style="color: #F6B951;">kabupaten</span> (bupati) secara langsung setiap lima tahun sekali. Tahun ini, pilkada akan dilaksanakan serentak di:</p>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-2 poppins-bold text-center me-5" style="background-color: #162F50; font-size: 96px; color: white; border-radius: 25px 25px 0px 0px;">37</div>
        <div class="col-2 poppins-bold text-center ms-5" style="background-color: #162F50; font-size: 96px; color: white; border-radius: 25px 25px 0px 0px;">576</div>
    </div>
    <div class="row pb-4 justify-content-center">
        <div class="col-2 poppins-bold text-center me-5" style="background-color: white; font-size: 24px; color: #162f50; border-radius: 0px 0px 25px 25px;">Provinsi</div>
        <div class="col-2 poppins-bold text-center ms-5" style="background-color: white; font-size: 20px; color: #162f50; border-radius: 0px 0px 25px 25px;">Kabupaten/Kota</div>
    </div>
</div>

<div class="row p-3 mb-lg-4 mb-0 mx-5">
    <div class="col-12 poppins-extrabold pb-5 text-lg-start text-center judul-beranda">Tanggal Penting!!</div>
    <div class="col">
        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
            <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                    <div class="inner-circle"></div>
                    <div class="poppins-bold mt-3" style="background-color: #F1F1F1; color: #162F50; border-radius: 20px 20px 0px 0px; font-size: 96px;">22</div>
                    <div class="poppins-regular p-2" style="background-color: #162F50; color: white; border-radius: 0px 0px 20px 20px;">September 2024</div>
                    <p class="h6 mt-3 mb-1 poppins-bold">Penetapan Pasangan Calon</p>
                    </p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                    <div class="inner-circle"></div>
                    <div class="poppins-bold mt-3" style="background-color: #F1F1F1; color: #162F50; border-radius: 20px 20px 0px 0px; font-size: 96px;">25</div>
                    <div class="poppins-regular p-2" style="background-color: #162F50; color: white; border-radius: 0px 0px 20px 20px;">Oktober 2024</div>
                    <p class="h6 mt-3 mb-1 poppins-bold">Periode Kampanye</p>
                    </p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                    <div class="inner-circle"></div>
                    <div class="poppins-bold mt-3" style="background-color: #F1F1F1; color: #162F50; border-radius: 20px 20px 0px 0px; font-size: 96px;">27</div>
                    <div class="poppins-regular p-2" style="background-color: #162F50; color: white; border-radius: 0px 0px 20px 20px;">November 2024</div>
                    <p class="h6 mt-3 mb-1 poppins-bold">Pemungutan Suara</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row p-3 mx-5">
    <div class="col-12 poppins-extrabold text-lg-start text-center judul-beranda">Cara Mencoblos di TPS</div>
</div>

<div class="row p-3 mb-4 mt-2 mx-5 justify-content-center" style="background-color: #F1F1F1; border-radius: 20px;">
    <div class="col-12 poppins-bold p-lg-4 p-2 pt-3 pb-3 my-2 text-center" style="color: #162F50; font-size: 32px;">
        <p class="penjelasan-beranda">Tahukah kamu? Indonesia mempunyai tata cara dalam menggunakan hak suara ketika Pilkada. Sobat pemilih, akan mendapatkan dua surat suara untuk Gubernur dan Bupati atau Walikota. Simak prosedurnya, yuk!</p>
    </div>
</div>

<div class="container py-3 poppins-regular">
    <div class="main-timeline mb-5">
        <div class="timeline left">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="poppins-bold">Tahap 1</h3>
                    <p class="mb-0">Datanglah ke TPS tepat waktu dari pukul 07.00 - 13.00. Petugas KPPS akan mengarahkan untuk mengisi daftar hadir.</p>
                </div>
            </div>
        </div>
        <div class="timeline right">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="poppins-bold">Tahap 2</h3>
                    <p class="mb-0">Sobat Pemilih kemudian akan diminta untuk menyerahkan KTP asli dan Formulir pemberitahuan pemungutan suara untuk dilakukan pengecekan. Setelah selesai, Sobat Pemilih akan menunggu giliran.</p>
                </div>
            </div>
        </div>
        <div class="timeline left">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="poppins-bold">Tahap 3</h3>
                    <p class="mb-0">Setelah dipanggil, Sobat Pemilih akan mendapatkan dua surat suara. Yakni surat suara Calon Gubernur (warna) dan Calon Bupati/Walikota (warna).</p>
                </div>
            </div>
        </div>
        <div class="timeline right">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="poppins-bold">Tahap 4</h3>
                    <p class="mb-0">Pergi ke bilik suara untuk melakukan pencoblosan. Setelah kedua surat suara dicoblos, Sobat Pemilih dapat melipat kembai surat suara sesuai petunjuk dan memasukkannya ke dalam kotak suara.</p>
                </div>
            </div>
        </div>
        <div class="timeline left">
            <div class="card">
                <div class="card-body p-4">
                    <h3 class="poppins-bold">Tahap 5</h3>
                    <p class="mb-0">Terakhir, celupkan salah satu ujung jari tangan ke tinta sebagai bukti telah menggunakan hak suara dalam Pilkada.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row text-center mt-lg-4 mt-1 mb-4">
    <div class="col-12" style="overflow: hidden; position: relative;">
        <div class="starburst-yellow"></div>
        <div class="row">
            <div class="pt-5 mt-2 col-12 poppins-extrabold mb-4 slogan-beranda">🌐 QUIZ 🌐</div>
            <div class="col-12 poppins-extrabold mb-4 penjelasan-beranda">Untuk mengukur tingkat pemahamanmu mengenai Pilkada.</div>
            <div class="col-lg-12 mb-5">
                <a href="#" class="btn poppins-bold px-4 penjelasan-beranda" style="background-color: #F6B951; color: white; border-radius: 15px;">Cobain, yuk!</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2024 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in the corresponding elements
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "0";
            document.getElementById("hours").innerHTML = "0";
            document.getElementById("minutes").innerHTML = "0";
            document.getElementById("seconds").innerHTML = "0";
        }
    }, 1000);
</script>

@endsection