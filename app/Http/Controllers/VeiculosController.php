<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function listar()
    {

    /**   Recuperar os registros do banco */
        $veiculos = Veiculo::get();
        return view('user.listar', ['veiculos' => $veiculos]);
    }

}
