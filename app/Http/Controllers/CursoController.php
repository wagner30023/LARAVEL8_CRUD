<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        // dd($cursos);
        return view('curso.index',['cursos' => $cursos]);
    }

    public function create()
    {
        return view('curso.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        Curso::create($request->all());
        return redirect()->route('curso.index');
    }
}
