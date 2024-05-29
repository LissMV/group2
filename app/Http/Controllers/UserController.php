<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([

        ]);
    }

    public function Register(Request $request) {
        $credentials = $request->validate([
            'email'
            'name'
            'password'
        ]);
    }

}
