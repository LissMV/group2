<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;


class StoreController extends Controller
{
    public function index() {
        return view("");
    }

    public function create(Request $request) {
       $store = $request->dd([
        'user_id' => Auth::user()->id
       ])->validate([
        'name' => 'required',
        'phone' => 'required',
        'email'=> 'required|email',
        'address' => 'required',
        'description' => 'required',
        'social_media' => 'required',
       ]);

       dd($store);

       $newStore = store::create($store);

       if($newStore) {
        Auth::create($newStore);
        return redirect('/home');
       }
    }

    public function edit(Request $request) {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

    }

    public function destroy(Store $store) {
        $store->delete();
        return redirect('/');
    }
}
