<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

//Exercício 1 — Criando um Controller Simples
Route::get('/cursos', [CursoController::class, 'index']);

//Exercício 2 — Controller Retornando View
Route::get('/cursos/novo', [CursoController::class, 'create']);

//Exercício 3 — Envio de Dados para a View
Route::get('/cursos/lista', [CursoController::class, 'listagem']);

//Exercício 4 — Controller com Parâmetro
Route::get('/cursos/{id}', [CursoController::class, 'show']); 

//Exercício 5 — Formulário e Request
Route::post('/cursos/salvar', [CursoController::class, 'store']);

//Exercício 6 — Resource Controller (CRUD)
Route::resource('alunos', AlunoController::class);

//Exercício 7 — Desafio Prático
Route::get('/disciplinas', [DisciplinaController::class, 'index']);

Route::get('/disciplinas/nova', [DisciplinaController::class, 'create']);

Route::post('/disciplinas/salvar', [DisciplinaController::class, 'store']);

Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

//Atividade — Fluxo create → store
Route::get('/produtos/create', [ProdutoController::class, 'create']);

Route::post('/produtos', [ProdutoController::class, 'store']);
