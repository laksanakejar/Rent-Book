<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::all();
        return view('dashboard.user', compact('data'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/')->with('success', 'berhasil logout');
    }

    public function edit($id)
    {
       $users = User::where('id', $id)->first();
       return view('dashboard.edit', compact('users'));    
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        User::where('id', $id)->update([
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/user');
    }

    public function destroy($id)
    {
        User::where('id',  '=', $id)->delete();
        return redirect('/user');
    }
}
