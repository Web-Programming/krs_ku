<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index(){
        return view('matakuliah.index',[
            'matakuliah' => MataKuliah::all(),
            'subtitle' => '',
            'title' => 'Mata Kuliah'
        ]);
    }
    
    public function createview(){
        return view('matakuliah.create', [
            'subtitle' => 'Create',
            'title' => 'Mata Kuliah',
        ]);
    }

    public function create(Request $request)
    {
        MataKuliah::create([
            'kodeMK' => $request['kodeMK'],
            'namaMK' => $request['namaMK'],
            'dosen' => $request['dosen'],
        ]);
        return redirect('/matakuliah');
    }

    public function updateview(MataKuliah $matakuliah){
        return view('matakuliah.update',[
            'matakuliah' => $matakuliah,
            'subtitle' => 'Update',
            'title' => 'Mata Kuliah',
        ]);
    }

    public function update(Request $request, MataKuliah $matakuliah){
        $validatedData = [
            'kodeMK' => $request['kodeMK'],
            'namaMK' => $request['namaMK'],
            'dosen' => $request['dosen'],
        ];
        MataKuliah::where('id', $matakuliah->id)->update($validatedData);
        return redirect('/matakuliah');
    }

    public function delete(MataKuliah $matakuliah){
        MataKuliah::destroy($matakuliah->id);
        return redirect('/matakuliah');
    }
}
