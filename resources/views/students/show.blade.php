@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row-cols-2">
            <h2>{{ $student->name }}</h2>
            <p>{{ $student->birth_date }}</p>
        </div>
        <p>Email: {{ $student->email }}</p>

        <div class="box-header with-border">
            <h5 class="box-title">
                Cursos Matriculados
            </h5>
        </div>
        <div class="box-body table-responsive table-bordered">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Titulo</th>
                    <th>Ações</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>
                            <div class="row">
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
@endsection
