<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function getAllUser()
    {
        $allUser = User::all();
        if (!$allUser) {
            return $this->responError(0, "Tidak ada data user sama sekali ");
        }

        return response()->json([
            'status' => 1,
            'pesan' => "data berhasil di get",
            'data' => $allUser,
        ]);
    }
    public function updateUser(Request $request, $user_id)
    {
        $pesan = [
            'name.required' => 'nama wajib diisi',
            'email.required' => 'nama wajib diisi',

        ];

        $validasi = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',

        ], $pesan);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->responError(0, $val[0]);
        }
        $user = User::findOrFail($user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gambar' => $request->file('gambar')->store('image-user'),
        ]);

        return Response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $user,

        ], Response::HTTP_OK);
    }

    public function storePass(Request $request, $id)
    {
        // make validation for old password
        $user = User::find($id);
        if (!$user) {
            return $this->responError(0, "data tidak tersedia");
        }
        $old_password = $request->old_password;
        if (Hash::check($old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
            return Response()->json([
                'status' => 1,
                'pesan' => "data berhasil di update",
                'data' => $user,
            ], Response::HTTP_OK);
        } else {
            return $this->responError(0, "password lama tidak sesuai");
        }
    }
    public function resetPass($id)
    {
        $user = User::find($id);
        if (!$user) {
            return $this->responError(0, "data tidak ada");
        }

        $user->password = Hash::make(1234);
        $user->save();

        return response()->json([
            'status' => 1,
            'pesan' => 'Password Berhasil di reset',
            'data' => $user,
        ], Response::HTTP_OK);
    }

    public function storeGambar(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return $this->responError(0, 'data user tidak ada');
        }

        $user->update([
            'gambar' => $request->file('gambar')->store('image-user'),
        ]);

        return Response()->json([
            'status' => 1,
            'pesan' => "data berhasil diupdate",
            'data' => $user,

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
