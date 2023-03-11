<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        // Validation
        $this->validate($request,[
            'username' => 'required|min:5|max:20',
            'fullname' => 'required|min:5|max:20',
            'email' => 'required|email|max:30',
            'password' => 'required|min:10|max:20|confirmed'
        ]);

        // Creating the new user and linking It to the database
        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Signing the user in
        auth()->attempt($request->only('email','password'));
        // Redirect to the main page
        return redirect()->route('dashboard');
    }
}
