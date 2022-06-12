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

        $user = $request->user();
        // $user = Auth::user();

        if (!$user) {
            return $this->responError(1, "Harap Login dulu");
        }

        $mutabaah = Mutabaah::where('user_id', '=', $user->id)->get();
        if (!$mutabaah) {
            return $this->responError(0, "data tidak tersedia");
        }
        return response()->json([
            'status' => 1,
            'pesan' => "Data Mutabaah berhasil di get!!",
            'mutabaah' => $mutabaah,

        ], Response::HTTP_OK);
    }

    public function detailMutabaah($id)
    {
        $mutabaah = Mutabaah::find($id);
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
        $validasi = Validator::make($request->all(), [
            'catatan'    => "required",
            'deskripsi'        => "required",
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $mutabaah =   Mutabaah::create([
            'catatan'           => $request->catatan,
            'deskripsi'         => $request->deskripsi,
            'user_id'         => Auth::user()->id
        ]);
        return response()->json([
            'status' => 1,
            'pesan' => "berhasil Menambahkan data Mutabaah",
            'update an' => $mutabaah
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
