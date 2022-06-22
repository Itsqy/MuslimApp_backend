<?php

namespace App\Http\Controllers;

use App\Models\Emas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $i = 1;
        $user = Auth::user();
        $emas = Emas::orderBy('id', 'desc')->paginate(1);

        // $cek = select * from Emas
        return view('content.emas.emas', compact('emas', 'i', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('content.emas.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hargaemas' => 'required',

        ]);
        Emas::create([
            'hargaemas' => $request->hargaemas,
        ]);
        Alert::success('Congrats', "anda telah menambahkan data");
        return redirect('/emas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $emas = Emas::findOrFail($id);
        return view('content.emas.edit', compact('emas', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hargaemas' => 'required',

        ]);
        $emas = Emas::find($id);
        $input = $request->all();
        $emas->update($input);

        Alert::success('Congrats', "data telah di update!!");
        return redirect('/emas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emas = Emas::findOrFail($id);
        // alert()->question('Deleting', 'Yakin ingin menghapus data anda ?');
        $emas->delete();
        alert()->success('Success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
