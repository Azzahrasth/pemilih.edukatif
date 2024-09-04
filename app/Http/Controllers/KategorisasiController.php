<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Paslon;

class KategorisasiController extends Controller
{
    // Menampilkan daftar paslon
    public function index(Request $request)
    {
        // Ambil daftar semua daerah untuk dropdown
        $daerahs = Paslon::pluck('daerah')->unique();

        // Check if both 'kategori' and 'daerah' are filled
        if (!$request->filled('kategori') || !$request->filled('daerah')) {
            // Show the message if either field is empty
            return view('kategorisasi', [
                'message' => 'TOLONG INPUTKAN KATEGORI DAN DAERAH TERLEBIH DAHULU',
                'daerahs' => $daerahs,
            ]);
        }

        // Query untuk mendapatkan paslon berdasarkan filter
        $paslons = Paslon::where('daerah', $request->daerah)
            ->with(['kategorisasi' => function($query) use ($request) {
                $query->where('kategori_isu', $request->kategori);
            }])
            ->orderBy('id', 'asc')
            ->get();

        return view('kategorisasi', [
            'paslons' => $paslons,
            'daerahs' => $daerahs,
        ]);
    }
}
