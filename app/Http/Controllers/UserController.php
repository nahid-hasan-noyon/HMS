<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

    public function profile(){
        return view('BackEnd.user.user_profile');
    }
    public function user_edit($userID){
        $user = User::find($userID);
        // return $user;
        return view('BackEnd.user.edit', compact('user'));
    }
    public function user_update(Request $request,$userID){
        // return $request;
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        User::where('id',$userID)->update([
            'name' => $request->name,
            'email'=> $request ->email,
            'password' => Hash::make($request->password)
        ]);
        toast('Information updated successfully!','success');
        return redirect()->route('user.profile');

    }
}
