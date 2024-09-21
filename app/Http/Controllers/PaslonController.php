<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;
use App\Models\Kandidat;

class PaslonController extends Controller
{
    public function index(Request $request)
    {
        // Ambil daftar semua daerah untuk dropdown
        $daerahs = Paslon::pluck('daerah')->unique();

        // Query untuk mendapatkan kandidat
        $query = Paslon::with('kandidat'); // Eager loading kandidat

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



    public function show($id)
    {
        $paslon = Paslon::with(['pengusung', 'kategorisasi', 'kandidat'])->find($id); // Eager loading pengusung, kategorisasi, dan kandidat

        if (!$paslon) {
            abort(404);
        }

        return view('profilpaslon', [
            'paslon' => $paslon,
            'kandidats' => $paslon->kandidat // Data kandidat sudah tersedia di $paslon
        ]);
    }

}

