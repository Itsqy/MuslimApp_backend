<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function toFormPass()
    {
        $user = Auth::user();
        return view('user.editpass', compact('user'));
    }



    public function editProfile($id)
    {
        $user = auth()->user();
        return view('user.editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $profile = User::findOrfail($id);
        $input = $request->all();
        $profile->update($request->all());
        if ($request->gambar) {
            $profile->update([
                'gambar' => $request->file('gambar')->store('image-user')
            ]);
        }
        Alert::success('Congrats', 'berhasil mengubah profile');
        return redirect('/home');
    }

    public function storePass(ChangePasswordRequest $request)
    {
        $old_pass = auth()->user()->password;
        $user_id = auth()->user()->id;

        if (!Hash::check($request->input('password'), $old_pass)) {
            if (Hash::check($request->input('old_password'), $old_pass)) {
                $user = User::find($user_id);
                $user->password = Hash::make($request->input('password'));
                $user->save();

                Alert::success('Congrats', 'berhasil menambahkan data');
                return redirect('/home');
            } else {
                return redirect()->back()->with('Failed', 'Password Salah!');
            }
        } else {
            return redirect()->back()->with('Failed', 'Password Tidak Boleh Sama!');
        }
    }

    public function allUser()
    {
        $i = 1;
        $user = Auth::user();
        $allUser = User::all();
        return view('content.user.user', compact('allUser', 'i', 'user'));
    }


    public function resetPass($id)
    {
        $user = User::find($id);
        $user->password = Hash::make(1234);
        $user->save();
        Alert::success('Congrats', 'Password Berhasil di reset');

        return redirect('/allUser');
    }
}
