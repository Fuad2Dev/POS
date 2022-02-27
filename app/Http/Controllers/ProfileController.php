<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('profile.index');
    }

    function updatePassword(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        if (Hash::check($request->old_password, auth()->user()->password)) {
            $password = Hash::make($request->password);
            User::find(auth()->user()->id)->update(compact('password'));
            return redirect()->route('profile.index')->with('success', 'password changed successfully');
            
        } else {
            $request->session()->flash('error', 'invalid password');
            
            return redirect()->route('profile.index')->with('error', 'invalid password');
        }
        
    }
}
