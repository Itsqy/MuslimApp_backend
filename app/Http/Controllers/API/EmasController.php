<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Emas;
use Illuminate\Http\Request;
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

    public function responError($status, $pesan)
    {

        return response()->json([
            'status' => $status,
            'pesan' => $pesan,
        ], Response::HTTP_NOT_FOUND);
    }
}
