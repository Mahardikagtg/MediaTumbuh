<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminModel;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses_login(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $kredensil = $request->only('username','password');
        
        if (Auth::guard('admin')->attempt($kredensil)) {
            return redirect()->intended('administrator');
        }
        
        elseif (Auth::guard('user')->attempt($kredensil)) {
            return redirect()->intended('/');
        }
        return redirect('login')->with('error','Username tidak terdaftar!');
    }

    public function logout(Request $request)
    {
        $request -> session() -> flush();
        Auth::logout();
        return redirect('/');
    }

}
