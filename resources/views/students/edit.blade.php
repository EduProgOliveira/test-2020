@extends('adminlte::page')

@section('content')
    <div class="container">
        <h2>{{ $student->name }}</h2>
        <div class="row">
            <div class="col-md-5">
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome do Aluno" value="{{ $student->name != null ? $student->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email do Aluno" value="{{ $student->email != null ? $student->email : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="Data Nascimento do Aluno" value="{{ $student->birth_date != null ? $student->birth_date : ''}}">
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary" type="button">
                        Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
