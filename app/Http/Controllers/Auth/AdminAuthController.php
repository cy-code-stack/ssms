<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class AdminAuthController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Please enter your email address.',
            'password.required' => 'Please enter your password.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->save();
            return Redirect::route('admin.index')->with('success','Admin Login Succesfully');
        }else{
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }

}
