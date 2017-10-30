@extends('shared.base')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Detalhes da marca</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre a marca</h4>
                    <p>Nome: {{$marca->nome}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{url()->previous()}}" class="btn btn-default">Voltar</a>
@endsection