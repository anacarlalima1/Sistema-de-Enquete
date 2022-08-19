@extends('welcome')
    @section('content')
    <form action="{{ route('atualizar_enquetes', ['id' => $enquetes->id]) }}" method="post">  
        @csrf
            <div class="mb-3">
                <label for="titulo">Título da Enquete:</label><input value="{{$enquetes->titulo}}" class="form-control" type="text" name="titulo" id="titulo">
            </div>
            <div class="mb-3">
                <label for="opcao1">Alternativa 1:</label><input value="{{$enquetes->opcao1}}"  class="form-control" type="text" name="opcao1" id="opcao1">
            </div>
            <div class="mb-3">
                <label for="opcao2">Alternativa 2:</label><input value="{{$enquetes->opcao2}}"  class="form-control" type="text" name="opcao2" id="opcao2">
            </div>
            <div class="mb-3">
                <label for="opcao3">Alternativa 3:</label><input value="{{$enquetes->opcao3}}"  class="form-control" type="text" name="opcao3" id="opcao3">
            </div>
            <div class="mb-3">
                <label for="created_at">Data de Ínicio:</label><input value="{{$enquetes->created_at}}"  class="form-control" type="date" name="created_at" id="created_at">
            </div>
            <div>
                <label for="expires_at">Data de Término:</label><input value="{{$enquetes->expires_at}}"  class="form-control" type="date" name="expires_at" id="expires_at">
            </div>
            <br/>
            <button class="btn btn-dark btn-block" type="submit">Salvar edição</button>
    </form>
    @endsection