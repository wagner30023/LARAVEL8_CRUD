<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        $nome = "Carlos Wagner";
        $cpf  = 715615951-87;
        return view('teste',['nome' => $nome, 'cpf' => $cpf]);
    }
}
