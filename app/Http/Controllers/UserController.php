<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:10',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success','Login successful');
            }

        return back()->withErrors(['email'=>'Wrong credentials', 'password'=> 'Wrong password']);
   }

    public function register(Request $request) {
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:10',
        ]);

        $user = User::create($datosVerificados);
        if ($user) {
            Auth::login($user);
            return redirect('/home');
        }

        return back()->withErrors([
            'email'=> '',
            'password'=> '',
            'name'=> '',
        ]);
    }

}
