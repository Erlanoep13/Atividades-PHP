<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

// Questão 1 — Rota simples
Route::get('/ola', function(){
    return 'Olá, Laravel!';
});

// Questão 2 — Sub-rota simples
Route::get('/curso/ads', function(){
    return 'Curso e Análise e Desenvolvimento de Sistemas';
});

// Questão 3 — Sub-rota adicional
Route::get('/curso/web', function(){
    return 'Disciplina Programação Web I';
});

// Questão 4 — Rota retornando View    
Route::get('/sobre', function(){
    return view('sobre');
});

// Questão 5 — Rota com outra View
Route::get('/contato', function(){
    return view('contato');
});

// Questão 6 — Sub-rota com View
Route::get('/instituicao/missao', function(){
    return view('instituicao/missao');
});

// Questão 7 — Rota com Controller (texto)
Route::get('/empresa', [PaginaController::class, 'empresa']);

// Questão 8 — Rota, Controller e View
Route::get('/service', [PaginaController::class, 'service']);

// Questão 9 — Múltiplas rotas em um controller
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);

// Questao 10 — Correção de erro proposital
// Apareceu o seguinte erro: Call to undefined method App\Http\Controllers\PaginaController::equipe()
Route::get('/equipe', [PaginaController::class, 'equipe']);

// Questão 11
Route::get('/usuario/{nome}', function($nome){
        return "O nome do usuário é: ".$nome;
});

// Questão 12
// O id é passado pela URL e acessado através do parâmetro na função do controller
Route::get('/produto/{id}', [PaginaController::class, 'produto']);