<?php

namespace App\Http\Controllers;

use App\Models\Dzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DzikirPagiPetangController extends Controller
{
    public function getDzikirpp()
    {
        // Alert::success('Congrats', 'berhasil masuk');
        $i = 1;
        $user = Auth::user();
        $dzikir = Dzikir::all();
        return view('content.dzikirpp.dzikirpp', compact('dzikir', 'user', 'i'));
    }

    public function toFormDzikirpp()
    {
        $user = Auth::user();
        return view('content.dzikirpp.add', compact('user'));
    }

    public function storeDzikirpp(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'arab' => 'required',
            'latin' => 'required',
            'arti' => 'required',
            'riwayat' => 'required',
            
        ]);

            Dzikir::create([
                'judul' => $request->judul,
                'arab' => $request->arab,
                'latin' => $request->latin,
                'arti' => $request->arti,
                'riwayat' => $request->riwayat,
            ]);

        Alert::success('Congrats', 'berhasil menambahkan data');

        $dzikir = Dzikir::all();
        $user = Auth::user();
        return redirect('/dzikirpp');
    }

    public function toFormEdit($id)
    {
        $user = Auth::user();
        $dzikirpp = Dzikir::find($id);
        return view('content.dzikirpp.edit', compact('user', 'dzikirpp', ));
    }

    public function updateDzikirpp(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'arab' => 'required',
            'latin' => 'required',
            'arti' => 'required',
            'riwayat' => 'required',
            
        ]);
        $dzikirpp = Dzikir::find($id);
        
            $dzikirpp->update([
                'judul' => $request->judul,
                'arab' => $request->arab,
                'latin' => $request->latin,
                'arti' => $request->arti,
                'riwayat' => $request->riwayat,
            ]);

        Alert::success('Congrats', 'berhasil mengupdate data');
        return redirect('/dzikirpp');
    }

    public function deleteDzikirpp($id)
    {
        $dzikir = Dzikir::find($id);
        $dzikir->delete();
        Alert::success('Congrats', 'berhasil menghapus data');
        return redirect('/dzikirpp');
    }
}
