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
        <h3>Cadastrar Novo Curso</h3>
        <div class="row">
            <div class="col-md-5">
                <form method="post" action="{{ route('course.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Titulo do Curso</label>
                            <input type="text" class="form-control" placeholder="Titulo do Curso" name="title">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="10" placeholder="Descrição do Curso"></textarea>
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
