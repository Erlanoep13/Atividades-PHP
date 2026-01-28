<!DOCTYPE html>
<html>
<body>
    <h1>Nova Disciplina</h1>
    <form action="/disciplinas/salvar" method="POST">
        @csrf
        <label>Nome da Disciplina:</label>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>