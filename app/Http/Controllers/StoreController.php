<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {

    }

    public function create() {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email'=> 'required|email|unique',
            'address' => 'required',
            'description' => 'required',
        ]);
    }

    public function store() {
        $store = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'name' => 'required',
        ]);
    }

    public function edit() {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

    }

    public function update() {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

    }

    public function destroy() {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email'=> 'required|email|unique',
            'address' => 'required',
            'description' => 'required',
        ]);

    }
    }




