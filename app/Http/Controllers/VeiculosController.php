<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function listar()
    {

    /**   Recuperar os registros do banco */
        $veiculos = Veiculos::get();
        return view('user.listar', ['veiculos' => $veiculos]);
    }

}
