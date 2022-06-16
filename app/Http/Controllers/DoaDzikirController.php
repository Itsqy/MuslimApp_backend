<?php

namespace App\Http\Controllers;

use App\Models\DoaDzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DoaDzikirController extends Controller
{
    public function getDzikir()
    {
        $user = Auth::user();
        $dzikir = DoaDzikir::all();
        return view('content.dzikir.dzikir', compact('user', 'dzikir'));
    }

    public function toFormDzikir()
    {
        $user = Auth::user();
        return view('content.dzikir.add', compact('user'));
    }

    public function storeDzikir(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',

        ]);
        DoaDzikir::create([
            'judul' => $request->judul,
            'isi' => $request->isi,

        ]);
        Alert::success('Congrats', "berhasil menambahkan data");
        return redirect('dzikir');
    }


    public function toFormEdit($id)
    {
        $dzikir = DoaDzikir::find($id);
        $user = Auth::user();

        return view('content.dzikir.edit', compact('user', 'dzikir'));
    }

    public function updateDzikir(Request $request, $id)
    {

        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $dzikir = DoaDzikir::find($id);
        $dzikir->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        Alert::success('Congrats', "berhasil mengupdate data");

        return redirect('/dzikir');
    }
    public function deleteDzikir($id)
    {
        $dzikir = DoaDzikir::find($id);
        $dzikir->delete();
        Alert::success('Congrats', 'berhasil menghapus data');
        return redirect('/dzikir');
    }
}
