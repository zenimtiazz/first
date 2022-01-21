<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        // dd($request->only('email','password'));  
        // dd(die dump) its like var_dump
        
        $this->validate($request, [
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|confirmed',


        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'username'=>$request->username,

            ]
        );
        auth()->attempt($request->only('email','password'));
        return redirect()->route('dashboard');
    }
}
