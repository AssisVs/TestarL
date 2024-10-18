<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

    /**   Recuperar os registros do banco */
       /**   Recuperar os registros do banco */
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }

    public function listar1()
    {

    /**   Recuperar os registros do banco */
        $usuarios = User::get();
        return view('user.listarusuarios', ['users' => $usuarios]);
    }
}
