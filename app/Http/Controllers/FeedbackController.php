<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // Metode untuk menampilkan halaman feedback
    public function index()
    {
        return view('feedback');
        
    }

     public function store(Request $request)
    {
    
       // Validasi data yang masuk
        $request->validate([
            'jenis_masukan' => 'required|string',
            'deskripsi' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            // 'lampiran' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048', // Uncomment jika file upload diaktifkan
        ], [
        'rating.required' => 'Anda belum memberikan rating',
         ]);

        // Membuat objek Feedback dan menyimpannya ke database
        Feedback::create([
            'jenis' => $request->input('jenis_masukan'),
            'feedback' => $request->input('deskripsi'),
            'rating' => $request->input('rating'),
            'user_id' => auth()->user()->id,

        ]);

        return redirect()->route('feedback')->with('success', 'Feedback berhasil ditambahkan!');

    }
}


