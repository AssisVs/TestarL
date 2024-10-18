<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function listar()
    {
    /**   Recuperar os registros do banco */
        $veiculos = Veiculo::get();
        return view('veiculos.listarveiculos', ['veiculos' => $veiculos]);
    }
}
