<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('register.index');
    }   

    public function store(Request $request)
    {

        Usuario::create($request->all());

        return to_route('login.index')->with('sucesso', "Cadastro realizado com sucesso, use suas credenciais para realizar o acesso.");
    }
}
