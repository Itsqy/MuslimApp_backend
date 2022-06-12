<?php

namespace App\Http\Controllers;

use App\Models\Emas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $emas = Emas::orderBy('id', 'desc')->paginate(1);
        // $cek = select * from Emas
        return view('content.emas.emas', compact('emas', 'user'));
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
        Emas::create([
            'hargaemas' => $request->hargaemas,
        ]);
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
        $emas = Emas::find($id);
        $input = $request->all();
        $emas->update($input);
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
        $emas->delete();

        return redirect()->back();
    }
}
