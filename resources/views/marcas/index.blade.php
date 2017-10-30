@extends('shared.base')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Lista de Marcas</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($marcas as $marca)

                            <tr>
                                <td>{{$marca->nome}}</td>
                                <td>
                                    <a href="{{route('marcas.edit', $marca->id)}}" class="btn btn-sm btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                    <a href="{{route('marcas.remove', $marca->id)}}" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    <a href="{{route('marcas.show', $marca->id)}}" class="btn btn-sm btn-success"><i
                                                class="fa fa-search"></i></a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div align="center" class="row">
            {{$marcas->links()}}
        </div>
    </div>
    <a href="{{route('marcas.create')}}" class="btn btn-primary">Adicionar Marca</a>

@endsection