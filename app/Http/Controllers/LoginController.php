<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request)
    {

        $credenciais = $request->validate([
            'usuario' => ['required'],
            'password' => ['required']
        ]);


        if (Auth::attempt($credenciais)) {

            $request->session()->regenerate();

            return redirect()->intended('dashboard');

        } else {

            return redirect()->back()->with('erro', 'usuário ou senha invalidos !');
        }
    }

}
