<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function mahasiswa(){
        return view('user.mahasiswa',[
            'user' => User::all(),
            'subtitle' => '',
            'title' => 'Mahasiswa'
        ]);
    }

    public function index(){
        return view('user.index',[
            'user' => User::all(),
            'subtitle' => '',
            'title' => 'User'
        ]);
    }

    public function createview(){
        return view('user.create', [
            'subtitle' => 'Create',
            'title' => 'User'
        ]);
    }

    public function create(Request $request)
    {
        $id = User::select('username')->where('username', $request->username)->value('username');
        if($id){
            return response("
            <script>
                alert('Username tidak boleh sama.');
                document.location.href = '/create-user';
            </script>
            ");
        }
        if( $request->role == "0"){
            return response("
            <script>
                alert('Pilih Role.');
                document.location.href = '/create-user';
            </script>
            ");
        } 
        User::create([
            'username' => $request['username'],
            'nama' => $request['nama'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/user');
    }

    public function updateview(User $users){
        return view('user.update',[
            'user' => $users,
            'subtitle' => 'Update',
            'title' => 'User'
        ]);
    }

    public function update(Request $request, User $users){
        $validatedData = [
            'username' => $request['username'],
            'nama' => $request['nama'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ];
        if( $request->role == "0"){
            return response("
            <script>
                alert('Pilih Role.');
                document.location.href = '/update-user-$users->id';
            </script>
            ");
        } 
        User::where('id', $users->id)->update($validatedData);
        return redirect('/user');
    }

    public function delete(User $users){
        User::destroy($users->id);
        return redirect('/user');
    }
}
