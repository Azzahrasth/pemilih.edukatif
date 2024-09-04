<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;

class PaslonController extends Controller
{
        // Menampilkan daftar paslon
        public function index(Request $request)
    {
        // Ambil daftar semua daerah untuk dropdown
        $daerahs = Paslon::pluck('daerah')->unique();

        // Query untuk mendapatkan kandidat
        $query = Paslon::query();

        // Filter berdasarkan daerah yang dipilih
        if ($request->filled('daerah')) {
            $query->where('daerah', $request->daerah);
        }

        // Ambil data paslon berdasarkan filter
        $paslons = $query->orderBy('id', 'asc')->get();

        return view('paslon', [
            'paslons' => $paslons,
            'daerahs' => $daerahs,
        ]);
    }


    // Menampilkan detail paslon
  public function show($id)
    {
        $paslon = Paslon::with(['pengusung', 'kategorisasi'])->find($id); // Menggunakan eager loading

        if (!$paslon) {
            abort(404);
        }

    //   dd($paslon);
        return view('profilpaslon', [
            'paslon' => $paslon
        ]);
    }
}

