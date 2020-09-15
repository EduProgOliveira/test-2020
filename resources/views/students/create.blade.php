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
        <h4>Novo Aluno</h4>
        <div class="row">
            <div class="col-md-5">
                <form method="post" action="{{ route('student.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome do Aluno" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email do Aluno" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="Data Nascimento do Aluno" name="birth_date">
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
