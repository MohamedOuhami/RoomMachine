<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        // Signing the user in
        if(!auth()->attempt($request->only('email','password'))){
            return back()->with('status','Invalid Login');
        }
        

        return redirect()->route('dashboard');
    }
}
