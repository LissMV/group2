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
        $store = $request->add([
            'user_id' => Auth::user()->id
        ])->validate([
            'user_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email'=> 'required|email',
            'address' => 'required',
            'description' => 'required',
            'social_media'
        ]);

        dd($store);

        $newStore = Store::create($store);

        if($newStore) {
            return redirect('/');
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
