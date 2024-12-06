<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(!auth()->attempt($attributes)){
            return back()->with('error', 'Invalid Credentials');
        }
        session()->regenerate();
        return redirect()->intended('/');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/login');
    }
}
