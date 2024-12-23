<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    // Indicar o nome da tabela
    protected $table = 'veiculos';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['placa', 'status', 'alocado_em', 'liberado_em'];
}
