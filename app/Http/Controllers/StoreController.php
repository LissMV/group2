<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function StoreForm(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'name' => 'required',
        ]);
       }

    public function Register(Request $request) {
        $credentials = $request->validate([
            'email'
        ]);
    }
}

