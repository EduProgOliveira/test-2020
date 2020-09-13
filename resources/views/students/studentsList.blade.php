<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alunos</title>
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome do Aluno</th>
        <th scope="col">Email</th>
        <th scope="col">Data de Nascimento</th>
    </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
        <tr>
            <th scope="row">{{ $aluno->id }}</th>
            <td>{{ $aluno->name }}</td>
            <td>{{ $aluno->email }}</td>
            <td>{{ $aluno->birth_date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
