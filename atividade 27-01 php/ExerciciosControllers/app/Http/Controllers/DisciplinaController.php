<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = ['Matemática', 'Física', 'Química', 'História'];
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Disciplina '{$nome}' cadastrada com sucesso!";
    }

    public function show($id)
    {
        return view('disciplinas.show', ['id' => $id]);
    }
}
