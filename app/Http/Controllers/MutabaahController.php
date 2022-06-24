<?php

namespace App\Http\Controllers;

use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Mul;

use function GuzzleHttp\Promise\all;

class MutabaahController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $i = 1;
        $mutabaah = Mutabaah::all();
        return view('content.mutabaah.mutabaah', compact('mutabaah', 'user', 'i'));
    }

    public function store(Request $request)
    {
        Mutabaah::create(
            [
                'catatan' => $request->cat,
                'deskripsi' => $request->desk,
                'user_id' => Auth::user()->id,
            ]
        );

        return redirect('/mutabaah');
    }

    public function toForm()
    {
        $user = auth()->user();
        return view('content.mutabaah.add', compact('user'));
    }

    public function toFormEdit($id)
    {

        $mutabaah = Mutabaah::find($id);
        $user = Auth::user();
        return view('content.mutabaah.edit', compact('user', 'mutabaah'));
    }

    public function updateMutabaah(Request $request, $id)
    {

        $mutabaah = Mutabaah::find($id);
        $mutabaah->update([
            'catatan' => $request->cat,

        ]);

        if ($request->desk) {
            $mutabaah->update([
                'deskripsi' => $request->desk
            ]);
        }
        return redirect('/mutabaah');
        // return dd($mutabaah);
    }

    public function deleteMutabaah($id)
    {
        $mutabaah = Mutabaah::find($id);
        $mutabaah->delete();
        return redirect('/mutabaah');
    }
}
