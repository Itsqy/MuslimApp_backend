<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Khutbah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class BeritaController extends Controller
{

    public function getBeritadanKhutbah()
    {

        $khutbah = Khutbah::orderBy('id', 'desc')->paginate(2);
        $berita = Berita::orderBy('id', 'desc')->paginate(2);
        if (!$berita)
            return $this->responError(0, "berita tidak tersedia");
        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'result' => [
                'berita' => $berita,
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

        $berita = Berita::all();
        if (!$berita) {
            return $this->responError(0, "berita tidak tersedia");
        }

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diget",
            'berita' => $berita,
        ], Response::HTTP_OK);
    }


    public function storeBerita(Request $request)
    {
        $newBerita = new Berita();
        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',
            'gambar.required'        => 'gambar wajib diisi',
            'tag.required'    => 'kategori wajib diisi',
        ];
        // validasi
        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",
            'tag'     => "required",
            'gambar'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        // store data
        $newBerita->judul = $request->judul;
        $newBerita->isi = $request->isi;
        $newBerita->tag = $request->tag;
        $newBerita->gambar = $request->file('gambar')->store('image-data');
        $newBerita->save();

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil ditambahkan",
            'data' => $newBerita,

        ], Response::HTTP_OK);
    }

    // kalo di update nya ada store image , methode nya pake post jangan pake put
    public function updateBerita(Request $request, $berita_id)
    {

        $getBerita = Berita::where('id', $berita_id)->first();
        if (!$getBerita) {
            return $this->responError(0, "data tidak ditemukan");
        }

        $pesan = [
            'judul.required'  => 'judul wajib diisi',
            'isi.required'      => 'isi wajib diisi',
            'gambar.required'        => 'gambar wajib diisi',
            'gambar.mimes'        => 'gambar wajib png atau jpg',
            'tag.required'    => 'kategori wajib diisi',
        ];

        $validasi = Validator::make($request->all(), [
            'judul'    => "required",
            'isi'        => "required",
            'gambar'     => "required|mimes:jpg,png",
            'tag'     => "required",
        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }

        $getBerita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->file('gambar')->store('image-data'),
            'tag' => $request->tag,
        ]);


        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $getBerita,
        ], Response::HTTP_OK);
    }


    public function deleteBerita($berita_id)
    {

        $getBerita = Berita::find($berita_id);
        if (!$getBerita) {
            return $this->responError(0, "data tidak ditemukan");
        }
        $getBerita->delete();

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
