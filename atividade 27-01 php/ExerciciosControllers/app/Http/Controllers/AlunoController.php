<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return "Lista de todos os alunos";
    }


    public function create()
    {
        return "Aqui vai o formulário de cadastro de aluno";
    }

    
    public function store(Request $request)
    {
        return "Processando salvamento do aluno...";
    }


    public function show(string $id)
    {
        return "Detalhes do aluno com ID: " . $id ;
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
