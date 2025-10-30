<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // Tampilkan form pengaduan
    public function index()
    {
        return view('contact');
    }

    // Simpan pengaduan ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'kategori' => 'required|string',
            'pesan' => 'required|string|max:1000',
        ]);

        Pengaduan::create($request->all());

        return redirect()->back()->with('success', 'Pengaduan Anda berhasil dikirim! Terima kasih atas partisipasi Anda.');
    }
}
