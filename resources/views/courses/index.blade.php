@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title">
                    Lista de Cursos
                </h5>
            </div>
            <div class="box-body table-responsive table-bordered">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->description }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href=""class="btn btn-app">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href=""class="btn btn-app">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href=""class="btn btn-app">
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
@endsection
