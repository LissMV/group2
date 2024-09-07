<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function create(Request $request)
    {
        $product = $request->validate([
            'image' => 'required',
            'is_available'=> 'required',
            'price' => 'required',
            'discount' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ]);


        $product['store_id'] = Auth::user()->id;

        $newProduct = Product::create($product);

        if ($newProduct) {
            Auth::user()->is_seller = true;
            Auth::user()->save();
            return redirect('/home');
        }
    }
}
