@extends('shared.base')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Detalhes do Produto</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o Produto</h4>
                    <p>Descrição: {{$produto->descricao}}</p>
                    <p>Preço: {{'R$ ' . number_format($produto->preco, 2, ',', '.')}}</p>
                    <p>Cor: {{$produto->cor}}</p>
                    <p>Peso: {{number_format($produto->peso, 1, '.', '') . 'kg'}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{url()->previous()}}" class="btn btn-default">Voltar</a>
@endsection