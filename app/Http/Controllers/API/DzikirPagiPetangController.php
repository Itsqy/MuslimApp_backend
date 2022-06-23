<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Dzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DzikirPagiPetangController extends Controller
{
  public function allDzikirpp(){
    $dzikirpp=Dzikir::all();
    if(!$dzikirpp){
        return $this->responError(0,"data tidak tersedia");
    }

    return response()->json([
        'status'=>1,
        'pesan'=>"data berhasil diget",
        'data'=>$dzikirpp,
    ],Response::HTTP_OK);
  }

  public function storeDzikirpp(Request $request)
    {
        $newDzikir = new Dzikir();
        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'arab.required'      => 'isi wajib diisi',
            'latin.required'        => 'gambar wajib diisi',
            'arti.required'    => 'kategori wajib diisi',
            'riwayat.required'    => 'kategori wajib diisi',
        ];
        // validasi
        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'arab'        => "required",
            'latin'     => "required",
            'arti'     => "required",
            'riwayat'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        // store data
        $newDzikir->judul = $request->judul;
        $newDzikir->arab = $request->arab;
        $newDzikir->latin = $request->latin;
        $newDzikir->arti = $request->arti;
        $newDzikir->riwayat = $request->riwayat;
        $newDzikir->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newDzikir,

        ], Response::HTTP_OK);
    }

    // kalo di update nya ada store image , methode nya pake post jangan pake put
    public function updateDzikirpp(Request $request, $id)
    {

        $getDzikir = Dzikir::where('id', $id)->first();
        if (!$getDzikir) {
            return $this->responError(0, "data tidak ditemukan");
        }

        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'arab.required'      => 'isi wajib diisi',
            'latin.required'        => 'gambar wajib diisi',
            'arti.required'    => 'kategori wajib diisi',
            'riwayat.required'    => 'kategori wajib diisi',
        ];

        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'arab'        => "required",
            'latin'     => "required",
            'arti'     => "required",
            'riwayat'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $getDzikir->update([
            'judul' => $request->judul,
            'arab' => $request->arab,
            'latin' => $request->latin,
            'arti' => $request->arti,
            'riwayat' => $request->riwayat,
        ]);


        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $getDzikir,
        ], Response::HTTP_OK);
    }


    public function deleteDzikirpp($id)
    {

        $getDzikir = Dzikir::find($id);
        if (!$getDzikir) {
            return $this->responError(0, "data tidak ditemukan");
        }
        $getDzikir->delete();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil dihapus",
        ], Response::HTTP_OK);
    }

  public function responError($status, $pesan)
    {

        return response()->json([
            'status' => $status,
            'pesan' => $pesan,
        ], Response::HTTP_NOT_FOUND);
    }
}
