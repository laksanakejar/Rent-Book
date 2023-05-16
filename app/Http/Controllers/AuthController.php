<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    
    public function login(){
        return view('auth.login');
    }


    public function indexRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect('/login');
    }
    

    public function indexLogin(Request $request)
    {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $request->session()->regenerate();
        if(Auth::user() && Auth::user()->role_id == true){
            return redirect('/dashboard');
        }
        return redirect()->intended('/dashboard-user');
    }

    return back()->withErrors([
        'password' => 'Login Gagal! Email atau Password salah',
    ]);
    }

    public function admin()
    {
        $this->authorize('admin');
    }
}
