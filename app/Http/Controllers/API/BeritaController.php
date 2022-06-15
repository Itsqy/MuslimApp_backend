<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Khutbah;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BeritaController extends Controller
{

    public function getBeritadanKhutbah()
    {
        $ibadah = Berita::where('kategori_id', 1)->get();
        $khutbah = Khutbah::where('kategori_id', 2)->get();
        $berita = Berita::all();
        if (!$berita)
            return $this->responError(0, "berita tidak tersedia");
        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'result' => [
                'ibadah' => $ibadah,
                'khutbah' => $khutbah,
            ],

        ], Response::HTTP_OK);
    }

    public function detailBerita($id)
    {
        $berita = Berita::find($id);
        if (!$berita)
            return $this->responError(0, "berita tidak tersedia");
        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'berita' => $berita,

        ], Response::HTTP_OK);
    }


    public function getBerita()
    {

        $berita = Berita::orderBy('id', 'desc')->paginate(3);
        if (!$berita) {
            return $this->responError(0, "berita tidak tersedia");
        }

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diget",
            'berita' => $berita,
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
