<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\Paslon; // Pastikan untuk mengimpor model Paslon
use DateTime;
use IntlDateFormatter;

class KandidatController extends Controller
{
    public function index(Request $request)
    {
        $query = Kandidat::query();

        // Filter berdasarkan daerah yang dipilih
        if ($request->has('daerah') && $request->daerah != '') {
            $query->whereHas('paslon', function($q) use ($request) {
                $q->where('daerah', $request->daerah);
            });
        }

        $data = $query->orderBy('id', 'asc')->get();

        // Ambil daftar semua daerah untuk dropdown
        $daerahs = Paslon::pluck('daerah')->unique();

        return view('kandidat', [
            'kandidats' => $data,
            'daerahs' => $daerahs,
        ]);
    }

    public function show($id)
    {
        $kandidat = Kandidat::with('paslon')->find($id); // Menggunakan eager loading

        if (!$kandidat) {
            abort(404);
        }

        // Menghitung umur
        $tanggalLahir = new DateTime($kandidat->tanggal_lahir);
        $sekarang = new DateTime('today');
        $umur = $tanggalLahir->diff($sekarang)->y;

        // Memformat tanggal lahir
        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta'
        );

        $formattedDate = $formatter->format($tanggalLahir);
        $kandidat->tanggal_lahir = $formattedDate;

        $data = Kandidat::orderBy('id', 'asc')->get();

        return view('profilkandidat', [
            'kandidat' => $kandidat,
            'datas' => $data,
            'umur' => $umur,
            'daerah' => $kandidat->paslon->daerah // Mengakses daerah melalui relasi
        ]);
    }
}
