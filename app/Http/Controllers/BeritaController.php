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
        // Mengambil semua berita beserta jumlah komentar (memanfaatkan eager loading untuk menghindari N+1 query)
        $data = Berita::withCount('Komentar')->get();

        // Mengambil berita terkini
        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')->limit(3)->get();

        // Mengirimkan data ke view
        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);
    }

    // Menampilkan detail berita
    public function show($id)
    {
        // Mengambil berita berdasarkan ID dengan komentar terkait dan user dari komentar tersebut
        $berita = Berita::with(['Komentar.User'])->find($id);

        // Jika berita tidak ditemukan, kembalikan halaman 404
        if (!$berita) {
            abort(404);
        }

        // Format tanggal berita
        $date = new DateTime($berita->tanggal_berita);
        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta'
        );
        $berita->tanggal_berita = $formatter->format($date);

        // Mengirimkan data ke view
        return view('detailberita', ['berita' => $berita, 'komentars' => $berita->Komentar]);
    }

    // Fungsi pencarian berita
    public function search(Request $request)
    {
        $keyword = $request->input('search');

        // Mencari berita berdasarkan judul dengan jumlah komentar menggunakan eager loading
        $data = Berita::withCount('Komentar')
            ->where('judul', 'like', "%{$keyword}%")
            ->get();

        // Berita terkini
        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')->limit(3)->get();

        // Mengirimkan data ke view
        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);
    }
}
