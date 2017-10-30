@extends('shared.base')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edição de marca</h3></div>
        <div class="panel-body">

            <form method="post" action="{{route('marcas.update', $marca->id)}}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <h4>Dados da marca</h4>
                <hr>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Informe o nome da Marca" value="{{$marca->nome}}" name="nome" required>
                </div>

                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection