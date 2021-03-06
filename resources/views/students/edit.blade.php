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
        <h2>{{ $student->name }}</h2>
        <div class="row">
            <div class="col-md-5">
                <form method="post" action="{{ route('student.update',['student' => $student]) }}">
                    @csrf
                    @method('put')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome do Aluno" value="{{ $student->name != null ? $student->name : ''}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email do Aluno" value="{{ $student->email != null ? $student->email : ''}}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Data Nascimento</label>
                            <input type="date" class="form-control" placeholder="Data Nascimento do Aluno" value="{{ date('Y-m-d',strtotime($student->birth_date)) }}" name="birth_date">
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
