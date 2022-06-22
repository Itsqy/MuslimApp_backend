<?php

namespace App\Http\Controllers;

use App\Models\Khutbah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'pemateri' => 'required',
            'tag' => 'required'
        ]);
        Khutbah::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pemateri' => $request->pemateri,
            'tag' => $request->tag,
        ]);
        Alert::success('Congrats', "berhasil menambahkan data");
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

        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'pemateri' => 'required',
            'tag' => 'required'
        ]);
        $khutbah = Khutbah::find($id);
        $khutbah->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pemateri' => $request->pemateri,
            'tag' => $request->pemateri,
        ]);
        Alert::success('Congrats', "berhasil mengupdate data");

        return redirect('/khutbah');
    }
    public function deleteKhutbah($id)
    {
        $khutbah = Khutbah::find($id);
        $khutbah->delete();
        Alert::success('Congrats', 'berhasil menghapus data');
        return redirect('/khutbah');
    }
}
