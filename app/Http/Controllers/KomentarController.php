<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Session;
use Illuminate\Support\Facades\Auth;
use IntlDateFormatter;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'komentar' => 'required|string|max:255',
        ]);

        // Menyimpan komentar ke database
        Komentar::create([
            'komentar' => $request->input('komentar'),
            'berita_id' => $request->input('berita_id'),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('berita.detail', ['id' => $request->input('berita_id')])->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $komentar = Komentar::find($id);

        return view('editKomentar', ['komentar' => $komentar]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|string|max:255',
        ]);

        $komentar = Komentar::find($id);

        $komentar->update([
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('berita.detail', ['id' => $komentar->berita_id])->with('success', 'Komentar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $komentar = Komentar::find($id);

        $komentar->delete();

        return redirect()->route('berita.detail', ['id' => $komentar->berita_id])->with('success', 'Komentar berhasil dihapus!');
    }
}

