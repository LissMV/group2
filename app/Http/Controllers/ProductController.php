<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function create() {
        $product = $request->validate([
            'is_available'=> 'required',
            'price' => 'required',
            'discount' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);
    }
    public function destroy() {
        $product = $request->validate([
            'is_available'=> 'required',
            'price' => 'required',
            'discount' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);
    }
    public function update() {
        $product = $request->validate([
            'is_available'=> 'required',
            'price' => 'required',
            'discount' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);
    }
}
