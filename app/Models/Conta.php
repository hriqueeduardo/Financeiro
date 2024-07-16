<?php

namespace App\Models;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['descricao', 'descicao_outro', 'valor', 'data_vencimento', 'situacao', 'descricao_detalhada'];

    // Uma Conta pertence a um Usuario
    public function usuarios()
    {
        return $this->belongsTo(Usuario::class);
    }
}
