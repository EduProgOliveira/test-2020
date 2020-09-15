@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row w-100">
            <div class="col d-flex justify-content-start">
                <h5 class="">
                    Lista de Cursos
                </h5>
            </div>
            <div class="col d-flex justify-content-end">
                <form role="form" class="form-inline">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome do Curso">
                        </div>
                    </div>
                    <a href="{{ route('course.create') }}"><button class="btn btn-default">Novo Curso</button></a>
                </form>
                <a href="{{ route('course.create') }}"><button class="btn btn-primary">Novo Curso</button></a>
            </div>
        </div>
        <br>
        <div class="box">
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
                                <div class="row w-100">
                                    <div class="col d-flex justify-content-between">
                                        <a href="{{ route('course.edit',['course' => $course]) }}" class="btn btn-app">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('course.show',['course' => $course]) }}" class="btn btn-app">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <button class="btn btn-app" type="button" onclick="courseDelete({{ $course->id }})">
                                            <i class="fa fa-trash"></i>
                                            <form>
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="course" id="delete_course{{ $course->id }}" value="{{ $course->id }}">
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
@endsection
