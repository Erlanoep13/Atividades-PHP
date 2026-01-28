<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Cadastrar Novo Produto</h1>

    <form action="/produtos" method="POST">
        @csrf
        
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" placeholder="Ex: Notebook Gamer">
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>