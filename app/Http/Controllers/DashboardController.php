<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $contas = Conta::all();

        return view('dashboard.index')->with('contas', $contas);
    }

    public function store(Request $request) 
    {

        $valor = $request->input('valor');
        $valorCorrigido = str_replace('R$ ', '', str_replace(',', '.', str_replace('.', '', $valor)));
        
        $descricao = $request->input('descricao');
        $descricao_outro = $request->input('descricao_outro');
        $valor = $valorCorrigido;
        $vencimento = $request->input('vencimento');
        $situacao = $request->input('situacao');
        $descricao_detalhada = $request->input('descricao_detalhada');

        $conta = new Conta();
        $conta->descricao = $descricao;
        $conta->descricao_outro = $descricao_outro;
        $conta->valor = $valor;
        $conta->vencimento = $vencimento;
        $conta->situacao = $situacao;
        $conta->descricao_detalhada = $descricao_detalhada;
        $conta->usuario_id = Auth::user()->id;
        $conta->save();

        return to_route('dashboard.index');
    }

    public function destroy($id)
    {

        $conta = Conta::find($id);
        $conta->delete();

        return to_route('dashboard.index');
    }

    public function situacao($id)
    {

        Conta::where('id', $id)->update(['situacao' => 1]);

        return to_route('dashboard.index');

    }
}
