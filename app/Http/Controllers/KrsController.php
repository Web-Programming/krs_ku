<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Krs;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Auth;

class KrsController extends Controller
{
    public function index(){
        return view('krs.index',[
            'user' => User::all(),
            'subtitle' => '',
            'title' => 'KRS'
        ]);
    }

    public function validasi($id){
        $status = 'KRS divalidasi';
        User::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }

    public function tolak($id){
        $status = 'KRS ditolak';
        User::where('id', $id)->update(['status'=>$status]);
        Krs::where('user_id', $id)->delete();
        return redirect()->back();
    }

    public function lihat(User $user){
        return view('krs.lihat',[
            'krs' => Krs::all(),
            'user' => $user,
            'subtitle' => '',
            'title' => 'Lihat KRS'
        ]);
    }

    public function krsku(){
        return view('krs.krsku',[
            'krs' => Krs::all(),
            'subtitle' => '',
            'title' => 'KRSku'
        ]);
    }

    public function createview(){
        return view('krs.create', [
            'kelas' => Kelas::all(),
            'matakuliah' => MataKuliah::all(),
            'subtitle' => 'Create',
            'title' => 'KRSku',
        ]);
    }

    public function create(Request $request)
    {
        $id = Auth::user()->id;
        for ($i = 0; $i < count($request->kelas); $i++) {
            Krs::create([
                'user_id' => $id,
                'kelas_id' => $request->kelas[$i],
                'matakuliah_id' => $request->matakuliah[$i],
            ]);
        }

        $status = 'Belum divalidasi';
        User::where('id', $id)->update(['status'=>$status]);
        return redirect('/krsku');
    }
}
