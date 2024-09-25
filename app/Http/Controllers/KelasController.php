<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        return view('kelas.index',[
            'kelas' => Kelas::all(),
            'subtitle' => '',
            'title' => 'Kelas'
        ]);
    }
}
