<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {

    }

    public function create() {

    }

    public function store() {
        $store = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }

    public function Register(Request $request) {
        $credentials = $request->validate([
            'email'
        ]);
    }
}

