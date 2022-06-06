<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:2|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('login')->with('success', 'Berhasil, Silahkan login!');
        
    }

    public function store1(Request $request){
        User::create($request->all());
        return redirect()->route('browse-makanan');
    }
}
