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
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Cor</th>
                            <th>Peso</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($produtos as $produto)

                            <tr>
                                <td>{{$produto->descricao}}</td>
                                <td>{{'R$ ' . number_format($produto->preco, 2, ',', '.')}}</td>
                                <td>{{$produto->cor}}</td>
                                <td>{{number_format($produto->peso, 1, '.', '') . 'kg'}}</td>
                                <td>
                                    <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-sm btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                    <a href="{{route('produtos.remove', $produto->id)}}" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    <a href="{{route('produtos.show', $produto->id)}}" class="btn btn-sm btn-success"><i
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
            {{$produtos->links()}}
        </div>
    </div>
    <a href="{{route('produtos.create')}}" class="btn btn-primary">Adicionar Produto</a>

@endsection