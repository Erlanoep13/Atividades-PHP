<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre()
    {
        // Atividade 1 — Controller inexistente
        // Erro: O método sobre não existia.
        // Correção: Criação deste método público sobre.

        // Atividade 2 — Método inexistente no controller
        // Erro: O método tentava retornar uma view que ainda não tinha arquivo criado em resources/views.
        // Correção: Arquivo criado.

        // Atividade 3 — View inexistente
        // Erro: O arquivo foi criado como 'Sobre.blade.php', mas chamado como 'sobre'.
        // Correção: Arquivo renomeado para minúsculo.

        // Atividade 4 — Erro de nome de view
        // Erro: O Laravel busca na raiz da pasta views, mas o arquivo foi movido para a subpasta 'paginas'.
        // Correção: Atualizei o retorno usando a notação de ponto.
        return view('paginas/sobre');
    }

    // Método da Atividade 5 — Falta de importação do Controller
    public function contato()
    {
        return "Página de Contato";
    }

    // Atividade 6 — Parâmetro não declarado
    // Erro: O parâmetro {id} enviado pela rota não estava sendo capturado aqui.
    // Correção: Adicionei ($id) no método.
    public function usuario($id)
    {
        return "Usuário: ".$id;
    }
}