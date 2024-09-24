<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Krs;

class KrsController extends Controller
{
    public function index(){
        return view('krs.index',[
            'user' => User::all(),
            'subtitle' => '',
            'title' => 'KRS'
        ]);
    }
}
