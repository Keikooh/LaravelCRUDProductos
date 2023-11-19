<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'username' => 'required',
                'password' => 'required'
            ]);

        if(!auth()->attempt($request->only('username', 'password'))){
            return back()->with('mensaje','Credenciales incorrectas');
        }

        return redirect()->route('MuroIndex');
    }
}
