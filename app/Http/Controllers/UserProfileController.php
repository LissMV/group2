<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;

class UserProfileController extends Controller
{
    public function index() {
        return view('users.edit');
    }

    public function update(Request $request) {
        $user = Auth::user();

        if($request->hasFile('image')){

            if(File::exists(public_path($user->image)) && $user->image != 'uploads/avatar.png'){
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $path = "/uploads/". $imageName;
            $user->image = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

            return redirect()->back();
        }
}
