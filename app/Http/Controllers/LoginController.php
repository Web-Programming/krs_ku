<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return response("
            <script>
                alert('Username atau Password salah.');
                document.location.href = '/login';
            </script>
            ");
    }

    public function logout(Request $request){
        Auth::logout();
            
            $request->session()->invalidate();
     
            $request->session()->regenerateToken();
        
            return redirect('/login');
    }
}
