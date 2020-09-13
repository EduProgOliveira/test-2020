<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Curso</th>
            <th scope="col">Descrição</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
        <tr>
            <th scope="row">{{ $curso->id }}</th>
            <td>{{ $curso->title }}</td>
            <td>{{ $curso->description }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
