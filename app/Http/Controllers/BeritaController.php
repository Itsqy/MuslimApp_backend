<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $i = 1;
        $user = Auth::user();
        $berita = Berita::all();
        return view('content.berita.berita', compact('berita', 'user', 'i'));
    }

    public function toFormBerita()
    {
        $user = Auth::user();
        return view('content.berita.add', compact('user'));
    }

    public function store(Request $request)
    {
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        $berita = Berita::all();
        $user = Auth::user();
        return view('content.berita.berita', compact('berita', 'user'));
    }

    public function toFormEdit($id)
    {
        $user = Auth::user();
        $berita = Berita::find($id);
        return view('content.berita.edit', compact('user', 'berita'));
    }

    public function updateBerita(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect('/berita');
    }

    public function deleteBerita($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/berita');
    }
}
