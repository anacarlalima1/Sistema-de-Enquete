<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de Votação</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Site de Votação</h1>
  <p>Faça aqui a sua enquete!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{ route('inicio') }}">Página Inicial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('salvar_enquetes') }}">Cadastrar enquete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('listar_enquetes') }}">Ver enquetes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ver_enquetes') }}">Gerenciar enquete</a>
      </li>    
    </ul>
  </div>  
</nav>
</div>
<div class="container" style="margin-top:30px">
  <div class="mb-3">
    <div class="w3-container">
    </div>
    @yield('content')
  </div>
</div>

</body>
</html>
