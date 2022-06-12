<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Khutbah;
use Illuminate\Http\Request;
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
    public function responError($status, $pesan)
    {

        return response()->json([
            'status' => $status,
            'pesan' => $pesan,
        ], Response::HTTP_NOT_FOUND);
    } //
}
