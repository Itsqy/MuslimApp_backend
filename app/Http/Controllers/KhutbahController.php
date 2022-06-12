<?php

namespace App\Http\Controllers;

use App\Models\Khutbah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhutbahController extends Controller
{
    public function getKhutbah()
    {
        $user = Auth::user();
        $khutbah = Khutbah::all();
        return view('content.khutbah.khutbah', compact('user', 'khutbah'));
    }

    public function toFormKhutbah()
    {
        $user = Auth::user();
        return view('content.khutbah.add', compact('user'));
    }

    public function storeKhutbah(Request $request)
    {
        Khutbah::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pemateri' => $request->pemateri,
        ]);

        return redirect('khutbah');
    }


    public function toFormEdit($id)
    {
        $khutbah = Khutbah::find($id);
        $user = Auth::user();

        return view('content.khutbah.edit', compact('user', 'khutbah'));
    }

    public function updateKhutbah(Request $request, $id)
    {
        $khutbah = Khutbah::find($id);
        $khutbah->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pemateri' => $request->pemateri,
        ]);

        return redirect('/khutbah');
    }
    public function deleteKhutbah($id)
    {
        $khutbah = Khutbah::find($id);
        $khutbah->delete();
        return redirect('/khutbah');
    }
}
