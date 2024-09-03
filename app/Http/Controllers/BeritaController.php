<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Komentar;
use App\Models\User;
use DateTime;
use IntlDateFormatter;

class BeritaController extends Controller
{
    // Metode untuk menampilkan semua berita
    public function index()
    {
        // Mengambil semua data berita
        $data = Berita::all();
        for ($i = 0; $i < $data->count(); $i++) {
            $data[$i]->komentar = Komentar::where('berita_id', $data[$i]->id)->count();
        }

        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')->limit(3)->get();

        // Mengirimkan data berita ke view
        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);
    }

    // Metode untuk menampilkan detail berita berdasarkan ID
    public function show($id)
    {
        // Mengambil data berita berdasarkan ID
        $berita = Berita::find($id);
        $berita->komentar = Komentar::where('berita_id', $id)->count();
        $komentar = Komentar::where('berita_id', $id)->get();
        for ($i = 0; $i < $komentar->count(); $i++) {
            $komentar[$i]->nama = User::where('id', $komentar[$i]->id)->pluck('name')->first();
        }

        // Jika berita tidak ditemukan, kembalikan halaman 404
        if (!$berita) {
            abort(404);
        }

        $date = new DateTime($berita->tanggal_berita);

        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta'
        );

        $formattedDate = $formatter->format($date);
        $berita->tanggal_berita = $formattedDate;

        // Mengirimkan detail berita ke view
        return view('detailberita', ['berita' => $berita, 'komentars' => $komentar]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search'); // Mengambil input dari form

        // Mencari berita berdasarkan keyword di kolom yang relevan
        $data = Berita::where('judul', 'like', "%{$keyword}%")->get();

        for ($i = 0; $i < $data->count(); $i++) {
            $data[$i]->komentar = Komentar::where('berita_id', $data[$i]->id)->count();
        }

        $data_terkini = Berita::orderBy('tanggal_berita', 'desc')->limit(3)->get();

        return view('berita', ['beritas' => $data, 'beritas_terkini' => $data_terkini]);    
    }
}
