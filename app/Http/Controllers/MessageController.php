<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Auth\Validate;

class MessageController extends Controller
{
    public function message(){
        $message = Message::all();
        return view('dashboard.message', compact('message'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        Message::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect('/');
    }

}
