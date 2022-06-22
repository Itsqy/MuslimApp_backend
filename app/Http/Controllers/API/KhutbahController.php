<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Khutbah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class KhutbahController extends Controller
{

    public function getKhutbah()
    {
        $khutbah = Khutbah::all();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'khutbah' => $khutbah,
        ]);
    }

    public function storeKhutbah(Request $request)
    {
        $newKhutbah = new Khutbah();
        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',
            'pemateri.required'    => 'pemateri wajib diisi',
            'tag.required'    => 'tag wajib diisi',
        ];
        // validasi
        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",
            'pemateri'     => "required",
            'tag'     => "required",

        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        // store data
        $newKhutbah->judul = $request->judul;
        $newKhutbah->isi = $request->isi;
        $newKhutbah->pemateri = $request->pemateri;
        $newKhutbah->tag = $request->tag;
        $newKhutbah->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newKhutbah,

        ], Response::HTTP_OK);
    }

    // kalo di update nya ada store image , methode nya pake post jangan pake put
    public function updateKhutbah(Request $request, $khutbah_id)
    {

        $getKhutbah = Khutbah::where('id', $khutbah_id)->first();
        if (!$getKhutbah) {
            return $this->responError(0, "data tidak ditemukan");
        }

        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',
            'pemateri.required'    => 'pemateri wajib diisi',
            'tag.required'    => 'tag wajib diisi',
        ];

        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",
            'pemateri'     => "required",
            'tag'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $getKhutbah->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'pemateri' => $request->pemateri,
            'tag' => $request->tag,
        ]);


        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $getKhutbah,
        ], Response::HTTP_OK);
    }


    public function deleteKhutbah($khutbah_id)
    {

        $getKhutbah = Khutbah::find($khutbah_id);
        if (!$getKhutbah) {
            return $this->responError(0, "data tidak ditemukan");
        }
        $getKhutbah->delete();

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
