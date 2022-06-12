<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DoaController extends Controller
{
    public function doa()
    {
        $user = Auth::user();
        $response = Http::get('https://doa-doa-api-ahmadramadhan.fly.dev/api');
        $data = $response->json();
        // dd($data);

        return view('content.doa', compact('data', 'user'));

        
    }
    public function hijriyah()
    {

        $response = Http::get('https://kalenderindonesia.com/api/nk3XkCF5e2Fy/kalender/hijriyah/1443');
        $data = $response->json();
        // dd($data);

        return view('content.hijriyah', compact('data'));
    }


}
