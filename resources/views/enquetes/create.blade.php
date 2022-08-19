@extends('welcome')
    @section('content')
    <form action="{{ route('salvar_enquetes') }}" method="post">  
        @csrf
            <div class="mb-3">
                <label for="titulo">Título da Enquete:</label><input class="form-control" type="text" name="titulo" id="titulo">
            </div>
            <div class="mb-3">
                <label for="opcao">Alternativa 1:</label><input class="form-control" type="text" name="opcao" id="opcao">
            </div>
            <div class="mb-3">
                <label for="opcao">Alternativa 2:</label><input class="form-control" type="text" name="opcao" id="opcao">
            </div>
            <div class="mb-3">
                <label for="opcao">Alternativa 3:</label><input class="form-control" type="text" name="opcao" id="opcao">
            </div>
            <div class="mb-3">
                <label for="created_at">Data de Ínicio:</label><input class="form-control" type="date" name="created_at" id="created_at">
            </div>
            <div>
                <label for="expires_at">Data de Término:</label><input class="form-control" type="date" name="expires_at" id="expires_at">
            </div>
            <br/>
            <button class="btn btn-dark btn-block" type="submit">Criar enquete</button>
    </form>
    @endsection
