<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DoaDzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DoaDzikirController extends Controller
{

    public function getDzikir()
    {
        $dzikir = DoaDzikir::all();

        if (!$dzikir)
            return $this->responError(0, "data tidak tersedia");
        else
            return response()->json([
                'status' => 1,
                'pesan' => "data berhasil di get",
                'dzikir' => $dzikir,
            ]);
    }

    public function storeDzikir(Request $request)
    {
        $newDzikir = new DoaDzikir();
        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',

        ];
        // validasi
        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",


        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        // store data
        $newDzikir->judul = $request->judul;
        $newDzikir->isi = $request->isi;

        $newDzikir->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newDzikir,

        ], Response::HTTP_OK);
    }

    // kalo di update nya ada store image , methode nya pake post jangan pake put
    public function updateDzikir(Request $request, $dzikir_id)
    {

        $getDzikir = DoaDzikir::where('id', $dzikir_id)->first();
        if (!$getDzikir) {
            return $this->responError(0, "data tidak ditemukan");
        }

        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',

        ];

        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",

        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $getDzikir->update([
            'judul' => $request->judul,
            'isi' => $request->isi,

        ]);


        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $getDzikir,
        ], Response::HTTP_OK);
    }


    public function deleteDzikir($Dzikir_id)
    {

        $getDzikir = DoaDzikir::find($Dzikir_id);
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
    } //
}
