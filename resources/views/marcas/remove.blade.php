@extends('shared.base')
@section('content')

    <div class="panel panel-danger">
        <div class="panel-heading">Deseja excluir essa marca?</div>
        <div class="panel-body">
            <form method="post" action="{{route('marcas.destroy', $marca->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h4>Sobre a marca</h4>
                        <p>Nome: {{$marca->nome}}</p>
                    </div>
                </div>
                <input type="submit" class="btn btn-danger" value="Excluir">
                <a href="{{url()->previous()}}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
@endsection