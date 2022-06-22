<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;
use Symfony\Component\HttpFoundation\Response;


class MutabaahController extends Controller
{
    public function getMutabaah(Request $request)
    {

        // $user = $request->user();
        $user = Auth::user();



        // $mutabaah = Mutabaah::where('user_id', '=', $user->id)->get();
        $mutabaah = Mutabaah::all();
        if (!$mutabaah) {
            return $this->responError(0, "data tidak tersedia");
        }
        return response()->json([
            'status' => 1,
            'pesan' => "Data Mutabaah berhasil di get!!",
            'user' => [
                'data' => $mutabaah
            ],

        ], Response::HTTP_OK);
    }

    public function detailMutabaah($user_id)
    {
        // $user=Auth::user();

        // $mutabaah = Mutabaah::find($user_id);
        $mutabaah = Mutabaah::where('user_id', '=', $user_id)->get();
        if (!$mutabaah)
            return $this->responError(0, "mutabaah tidak tersedia");
        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'mutabaah' => $mutabaah,

        ], Response::HTTP_OK);
    }

    public function storeMutabaah(Request $request)
    {
        $newMutabaah = new Mutabaah();
        $pesan = [
            'catatan.required'  => 'catatan wajib diisi',
            'deskripsi.required'      => 'deskripsi wajib diisi',
            'user_id.required'    => 'user_id wajib diisi',
        ];
        // validasi
        $validasi = Validator::make($request->all(), [
            'catatan'    => "required",
            'deskripsi'        => "required",
            'user_id'     => "required",

        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        // store data
        $newMutabaah->catatan = $request->catatan;
        $newMutabaah->deskripsi = $request->deskripsi;
        $newMutabaah->user_id = $request->user_id;
        $newMutabaah->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newMutabaah,

        ], Response::HTTP_OK);
    }

    // kalo di update nya ada store image , methode nya pake post jangan pake put
    public function updateMutabaah(Request $request, $id)
    {

        $getMutabaah = Mutabaah::where('id', $id)->first();
        if (!$getMutabaah) {
            return $this->responError(0, "data tidak ditemukan");
        }

        $pesan = [
            'catatan.required'  => 'catatan wajib diisi',
            'deskripsi.required'      => 'deskripsi wajib diisi',
            'user_id.required'    => 'user_id wajib diisi',
        ];

        $validasi = Validator::make($request->all(), [
            'catatan'    => "required",
            'deskripsi'        => "required",
            'user_id'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $getMutabaah->update([
            'catatan' => $request->catatan,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id,
        ]);


        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $getMutabaah,
        ], Response::HTTP_OK);
    }


    public function deleteMutabaah($id)
    {

        $getMutabaah = Mutabaah::find($id);
        if (!$getMutabaah) {
            return $this->responError(0, "data tidak ditemukan");
        }
        $getMutabaah->delete();

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
