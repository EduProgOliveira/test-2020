@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <h4>{{ $student->name }}</h4>
                <h5>{{ date('d/m/Y',strtotime($student->birth_date)) }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Email: {{ $student->email }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger d-none messageBox" role="alert"></div>
            </div>
        </div>
        <br>
        <div class="row w-100">
            <div class="col d-flex justify-content-between">
                <h5 class="">
                    Cursos Cadastrados
                </h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Cadastrar Curso</button>
            </div>
        </div>

        <br>

        <div class="box-body table-responsive table-bordered">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Titulo</th>
                    <th>Ações</th>
                </tr>
                @foreach ($registers as $register)
                    <tr>
                        <td>{{ $register->title }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="{{ route('course.show',['course' => $register->id]) }}"class="btn btn-app">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <button class="btn btn-app" type="button" onclick="courseDeleteFromStudent({{ $student->id, $register->id }})">
                                    <i class="fa fa-trash"></i>
                                    <form name="form_delete_student">
                                        @csrf
                                        <input type="hidden" name="student" id="delete_student" value="{{ $student->id }}">
                                    </form>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div id="modal-default" class="modal fade" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Novo Curso</h4>
                        <button type="button" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row w-100">
                            <div class="col d-flex justify-content-between">
                                <form name="formRegister" id="formRegister" class="form-inline" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <select name="course" id="course" class="form-control">
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>

                                <button class="btn btn-primary" type="submit" id="add" onclick="register({{ $student->id }})">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

