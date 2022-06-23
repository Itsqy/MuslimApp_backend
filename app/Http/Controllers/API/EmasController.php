<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Emas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class EmasController extends Controller
{
    public function getEmas()
    {
        $emas = Emas::all();
        if (!$emas)
            return $this->responError(0, "data Emas Tidak ada !");


        return response()->json([
            'status' => 1,
            'pesan' => "Berhasil di GET",
            'emas' => $emas
        ], Response::HTTP_OK);
    }


    public function storeEmas(Request $request)
    {

        $newEMas = new Emas();
        $pesan = [
            'hargaemas.required' => 'hargaemas wajib diisi',
            'hargaemas.number' => 'emas harus angka saja'
        ];

        $validasi = Validator::make($request->all(), [
            'hargaemas' => "required|integer"
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $newEMas->hargaemas = $request->hargaemas;
        $newEMas->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newEMas,
        ], Response::HTTP_OK);
    }

    public function updateEmas(Request $request, $id)
    {

        $newEMas = Emas::where('id', $id)->first();
        $pesan = [
            'hargaemas.required' => 'hargaemas wajib diisi',
            'hargaemas.number' => 'emas harus angka saja'
        ];

        $validasi = Validator::make($request->all(), [
            'hargaemas' => "required|integer"
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $newEMas->update([
            'hargaemas' => $request->hargaemas
        ]);

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $newEMas,
        ], Response::HTTP_OK);
    }

    public function deleteEmas($id)
    {

        $getEmas = Emas::find($id);
        if (!$getEmas) {
            return $this->responError(0, "data tidak ditemukan");
        }
        $getEmas->delete();

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
