<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;


class StoreController extends Controller
{
    public function index()
    {
        return view("");
    }

    public function create(Request $request)
    {
        $store = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'description' => 'required',
            'social_media' => 'required',
        ]);

        $store['image'] = 'uploads/avatar_store.png';
        $store['user_id'] = Auth::user()->id;

        $newStore = Store::create($store);

        if ($newStore) {
            Auth::user()->is_seller = true;
            Auth::user()->save();
            return redirect('/home');
        }
    }

    public function edit(Request $request)
    {
        $store = $request->validate([
            'image' =>'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'social_media' => 'required'

        ]);

        $store['image'] = '<uploads>avatar_store.png';
        $editStore = Store::update($store);

        if ($editStore) {
            return redirect('users.edit');
        }
    }

    public function destroy(Store $store)
    {
        $store->delete();
        return redirect('/');
    }


}
