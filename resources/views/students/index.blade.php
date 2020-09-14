@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h5 class="box-title">
                            Lista de Alunos
                        </h5>
                    </div>
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
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="{{ route('student.edit',['student' => $student->id]) }}"class="btn btn-app">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ route('student.show',['student' => $student->id]) }}"class="btn btn-app">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-3">
                                                <a href="{{ route('student.destroy',['student' => $student->id]) }}"class="btn btn-app">
                                                    <i class="fa fa-trash"></i>
                                                </a>
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
