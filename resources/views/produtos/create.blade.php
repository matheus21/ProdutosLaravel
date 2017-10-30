@extends('shared.base')

@section('content')


    <div class="panel panel-default">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>
        @endif
        <div class="panel-heading"><h3>Cadastro de produto</h3></div>
        <div class="panel-body">

            <form method="post" action="{{route('produtos.store')}}">
                {{ csrf_field() }}
                <h4>Dados do produto</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control"  name="descricao"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" name="preco"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cor">Cor</label>
                            <input type="text" class="form-control" name="cor"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="text" class="form-control" name="peso"
                                   required>
                        </div>
                    </div>
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection