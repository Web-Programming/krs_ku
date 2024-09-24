<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index(){
        return view('jadwal.index',[
            'jadwal' => Jadwal::all(),
            'subtitle' => '',
            'title' => 'Jadwal'
        ]);
    }
}
