<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Curso</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>
    
    <form action="/cursos/salvar" method="POST">
        
        @csrf

        <label for="nome">Nome do Curso:</label>
        <input type="text" name="nome" id="nome" placeholder="Ex: Laravel Avançado">

        <button type="submit">Salvar Curso</button>
    </form>
</body>
</html>