@extends('shared.base')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edição de produto</h3></div>
        <div class="panel-body">

            <form method="post" action="{{route('produtos.update', $produto->id)}}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <h4>Dados do produto</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" value="{{$produto->descricao}}"  name="descricao"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" value="{{$produto->preco}}" name="preco"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cor">Cor</label>
                            <input type="text" class="form-control" value="{{$produto->cor}}" name="cor"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" value="{{$produto->peso}}" name="peso"
                                   required>
                        </div>
                    </div>
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection