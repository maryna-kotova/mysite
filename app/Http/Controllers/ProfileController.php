<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function user()
    {
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }

    public function user_update(Request $request)
    {        
        $user = User::findOrFail(auth()->user()->id);
        
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        
        $fname = $request->file('avatar');
        if($fname != null){
            $user->avatar = $fname->store('public/uploads');           
        }   
        
        $validation = $request->validate([
            'name' => 'required|max:64',
            'email' => 'required',
            'avatar' => 'image',
        ]);
        $user->save();      
        return redirect('/profile')->with('success', 'Updated!');
    }
}

