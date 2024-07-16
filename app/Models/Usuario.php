<?php

namespace App\Models;

use App\Models\Conta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['usuario', 'password'];

    // Um Usuário tem 1 ou mais Contas
    public function contas()
    {
        return $this->hasMany(Conta::class, 'usuario_id');
    }
}
