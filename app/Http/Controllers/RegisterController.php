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
            'senha' => 'required | confirmed | min:8',
        ]);

        $user = $request->input('usuario');
        $password = $request->input('senha');

        $hashedPassword = Hash::make($password);

        $usuario = new Usuario();
        $usuario->usuario = $user;
        $usuario->senha = $hashedPassword;
        $usuario->save();

        return to_route('login.index')->with('sucesso', "Cadastro realizado com sucesso, use suas credenciais para realizar o acesso.");
    }
}
