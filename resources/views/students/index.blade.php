@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row w-100">
            <div class="col d-flex justify-content-between">
                <h5 class="">
                    Lista de Alunos
                </h5>
            </div>
            <div class="col d-flex justify-content-end">
                <form role="form" class="form-inline">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome do Curso">
                        </div>
                    </div>
                    <a href="{{ route('student.create') }}"><button class="btn btn-default">Novo Aluno</button></a>
                </form>
                <a href="{{ route('student.create') }}"><button class="btn btn-primary">Novo Aluno</button></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body table-responsive table-bordered">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data Nascimento</th>
                                <th>Ações</th>
                            </tr>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->birth_date }}</td>
                                    <td>
                                        <div class="row w-100">
                                            <div class="col d-flex justify-content-between">
                                                <a href="{{ route('student.edit',['student' => $student]) }}"class="btn btn-app">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('student.show',['student' => $student]) }}"class="btn btn-app">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button class="btn btn-app" type="button" onclick="studentDelete({{ $student->id }})">
                                                    <i class="fa fa-trash"></i>
                                                    <form name="form_delete_student">
                                                        @csrf
                                                        <input type="hidden" name="student" id="delete_student" value="{{ $student->id }}">
                                                    </form>
                                                </button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
