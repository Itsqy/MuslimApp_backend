<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        // Alert::success('Congrats', 'berhasil masuk');
        $i = 1;
        $user = Auth::user();
        $berita = Berita::all();
        return view('content.berita.berita', compact('berita', 'user', 'i'));
    }

    public function toFormBerita()
    {
        $user = Auth::user();
        $kategori = Kategori::all();
        return view('content.berita.add', compact('user', 'kategori'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tag' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        if ($request->gambar) {
            Berita::create([
                'tag' => $request->tag,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $request->file('gambar')->store('image-data')
            ]);
        } else {
            Berita::create([
                'tag' => $request->tag,
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        }
        Alert::success('Congrats', 'berhasil menambahkan data');

        $berita = Berita::all();
        $user = Auth::user();
        return redirect('/berita');
    }

    public function toFormEdit($id)
    {
        $user = Auth::user();
        $kategori = Kategori::all();
        $berita = Berita::find($id);
        return view('content.berita.edit', compact('user', 'berita', 'kategori'));
    }

    public function updateBerita(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'tag' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $berita = Berita::find($id);
        if ($request->gambar) {
            $berita->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'tag' => $request->tag,
                'gambar' => $request->file('gambar')->store('image-data')
            ]);
        } else {
            $berita->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'tag' => $request->tag,
            ]);
        }

        Alert::success('Congrats', 'berhasil mengupdate data');
        return redirect('/berita');
    }

    public function deleteBerita($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        Alert::success('Congrats', 'berhasil menghapus data');
        return redirect('/berita');
    }
}
