@extends('shared.base')
@section('content')

    <div class="panel panel-danger">
        <div class="panel-heading">Deseja excluir esse produto?</div>
        <div class="panel-body">
            <form method="post" action="{{route('produtos.destroy', $produto->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h4>Sobre o produto</h4>
                        <p>Descrição: {{$produto->descricao}}</p>
                        <p>Preço: {{'R$ ' . number_format($produto->preco, 2, ',', '.')}}</p>
                        <p>Cor: {{$produto->cor}}</p>
                        <p>Peso: {{number_format($produto->peso, 1, '.', '') . 'kg'}}</p>
                    </div>
                </div>
                <input type="submit" class="btn btn-danger" value="Excluir">
                <a href="{{url()->previous()}}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
@endsection