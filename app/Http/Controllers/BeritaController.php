<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Komentar;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Session;
use Illuminate\Support\Facades\Auth;
use IntlDateFormatter;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        // Mengambil semua berita beserta jumlah komentar, diurutkan berdasarkan komentar terbanyak
        $data = Berita::withCount('Komentar')->orderBy('komentar_count', 'desc')->limit(3)->get();
    
        // Mengambil berita terkini
        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')->get();
    
        // Memformat tanggal berita
        foreach ($data_terkini as $berita) {
            // Parsing tanggal dari format varchar (pastikan format sesuai dengan penyimpanan di database)
            $date = DateTime::createFromFormat('Y-m-d', $berita->tanggal_berita);
            if ($date) {
                $formatter = new IntlDateFormatter(
                    'id_ID',
                    IntlDateFormatter::LONG,
                    IntlDateFormatter::NONE,
                    'Asia/Jakarta'
                );
                $berita->tanggal_berita = $formatter->format($date);
            }
        }
    
        // Mengirimkan data ke view
        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);
    }
    

    public function show($id)
{
    // Mengambil berita berdasarkan ID dengan komentar terkait dan user dari komentar tersebut
    $berita = Berita::with(['Komentar.User'])->find($id);

    // Jika berita tidak ditemukan, kembalikan halaman 404
    if (!$berita) {
        abort(404);
    }

    // Parsing tanggal dari format varchar
    $date = DateTime::createFromFormat('Y-m-d', $berita->tanggal_berita);
    if ($date) {
        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta'
        );
        $berita->tanggal_berita = $formatter->format($date);
    }

    // Mengirimkan data ke view
    return view('detailberita', ['berita' => $berita, 'komentars' => $berita->Komentar]);
}


    // Fungsi pencarian berita
    public function search(Request $request)
    {
        $keyword = $request->input('search');

        // Mengambil semua berita beserta jumlah komentar, diurutkan berdasarkan komentar terbanyak
        $data = Berita::withCount('Komentar')
            ->where('judul', 'like', "%{$keyword}%")
            ->orderBy('komentar_count', 'desc')
            ->limit(3)
            ->get();

        // Berita terkini
        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')
            ->where('judul', 'like', "%{$keyword}%")
            ->get();

        // Mengirimkan data ke view
        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);
    }
}
