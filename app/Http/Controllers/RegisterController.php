<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('register.index');
    }   

    public function store(Request $request)
    {

        $request->validate([
            'usuario' => 'required',
            'password' => 'required | confirmed | min:8',
            'password_confirmation' => 'required | min:8',
        ]);

        $user = $request->input('usuario');
        $password = $request->input('password');

        $hashedPassword = Hash::make($password);

        $usuario = new Usuario();
        $usuario->usuario = $user;
        $usuario->password = $hashedPassword;
        $usuario->save();

        return to_route('login.auth')->with('sucesso', "Cadastro realizado com sucesso, use suas credenciais para realizar o acesso.");
    }
}
