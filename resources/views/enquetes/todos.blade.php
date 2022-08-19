@extends('welcome')
    @section('content')
        <table class="table">
        <tr><th scope="col">Título</th>
        <th scope="col">Alternativa 1</th>
        <th scope="col">Alternativa 2</th>
        <th scope="col">Alternativa 3</th>
        <th scope="col">Data de Ínicio</th>
        <th scope="col">Data de Término</th></tr>
        @foreach($enquetes as $enquetes)
            <tr>
                <td>{{$enquetes->titulo}}</td>
                <td>{{$enquetes->opcao1}}</td>
                <td>{{$enquetes->opcao2}}</td>
                <td>{{$enquetes->opcao3}}</td>
                <td>{{$enquetes->created_at}}</td>
                <td>{{$enquetes->expires_at}}</td>
                <td type="button" class="btn btn-success"><a class="text-light" href="{{ route('editar_enquetes', ['id'=>$enquetes->id])}}"
                        title="Editar enquetes {{ $enquetes->titulo }}" >Editar</a></td>
                        
                <td type="button" class="btn btn-danger"><a class="text-light" href="{{ route('excluir_enquetes', ['id'=>$enquetes->id])}}"
                        title="Excluir livro {{ $enquetes->titulo }}" >Excluir</a></td>
            </tr>
        @endforeach