<!DOCTYPE html>
<html>
<body>
    <h1>Disciplinas Ofertadas</h1>
    <a href="/disciplinas/nova">Cadastrar Nova</a>
    <ul>
        @foreach($disciplinas as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
</body>
</html>