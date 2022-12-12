<?php
session_start ();
$nome = $_SESSION['usuario'];
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <title>Index</title>

    </head>
   
    <body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="logo_png.png" width="30" height="30" alt="">
  </a>
</nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
         </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Início <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login/Sign-up</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
        </nav>