<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Lista de cursos';
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function listagem()
    {
        $cursos = [
            'Laravel Básico',
            'PHP Avançado',
            'Introdução ao Docker'
        ];

        return view('cursos.listagem', compact('cursos'));
    }

    public function show($id)
    {
        return "Curso selecionado: ID " . $id;
    }

    public function store(Request $request)
    {
        $nomeCurso = $request->input('nome');

        return "Curso cadastrado com sucesso: " . $nomeCurso;
    }
}
