@extends('adminlte::page')

@section('content')
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="alunos">
                        <button class="btn btn-block btn-primary btn-lg">
                            <i class="fas fa-user-graduate"></i><br>
                            Alunos
                        </button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="cursos">
                        <button class="btn btn-block btn-primary btn-lg">
                            <i class="far fa-address-book"></i><br>
                            Cursos
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
