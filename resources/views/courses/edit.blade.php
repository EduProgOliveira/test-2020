@extends('adminlte::page')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>{{ $course->name }}</h2>
        <div class="row">
            <div class="col-md-5">
                <form method="post" action="{{ route('course.update',['course' => $course]) }}">
                    @csrf
                    @method('put')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" placeholder="Nome do Aluno" value="{{ $course->title }}" name="title">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <textarea name="description" id="" cols="30" rows="10" placeholder="Descrição do Curso">
                                    {{ $course->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">
                        Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
