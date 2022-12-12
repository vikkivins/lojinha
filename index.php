<?php
session_start ();
$nome = $_SESSION['usuario'];
require_once 'cabecalho.php';
?>
<div class="row justify-content-center" style = "margin-top: 15px;">
<div class="col-sm-6">
<img src="img/header.png" class="img-fluid rounded-start" alt="Apocalipse Nuclear">
</div>
</div>

<div class="row justify-content-center" style = "margin-top: 15px;">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse1.png" class="img-fluid rounded-start" alt="Apocalipse Nuclear">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Nuclear</h5>
            <p class="card-text">Guerras voltaram ao gosto do público no início de 2020, e não saíram de moda desde então! Que tal acabar o mundo em grande estilo?</p>
            <p class="card-text"><h5 style="color: green">R$ 23.248</h5></p>
            <a href="confirmacao_de_compra.php?id=1" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse2.png" class="img-fluid rounded-start" alt="Apocalipse Meteoro">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Meteoro</h5>
            <p class="card-text">Introduzido na era Mesozoica, período Cretáceo, pelos nossos conterrâneos dinossauros. Pode parecer ultrapassado, mas é infalível. </p>
            <p class="card-text"><h5 style="color: green">R$ 25.199</h5></p>
            <a href="confirmacao_de_compra.php?id=2" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse3.png" class="img-fluid rounded-start" alt="Apocalipse Incendiário">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Incendiário</h5>
            <p class="card-text">O preferido dos cristãos! As compras tendem a ser canceladas com frequência, mas você pode ser a pessoa que finalmente tornará esse fim de mundo real.</p>
            <p class="card-text"><h5 style="color: green">R$ 18.327</h5></p>
            <a href="confirmacao_de_compra.php?id=3" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse4.png" class="img-fluid rounded-start" alt="Apocalipse Tornado">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Tornado</h5>
            <p class="card-text">O menos requisitado, mas apenas por ser muito subestimado. Os tornados podem abrir seus olhos para o novo mundo!</p>
            <p class="card-text"><h5 style="color: green">R$ 15.112</h5></p>
            <a href="confirmacao_de_compra.php?id=4" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse5.png" class="img-fluid rounded-start" alt="Apocalipse Tsunami">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Tsunami</h5>
            <p class="card-text">Planejado para acontecer em 2012, infelizmente teve o pedido cancelado. Mas as expectativas ainda são altíssimas...</p>
            <p class="card-text"><h5 style="color: green">R$ 27.463</h5></p>
            <a href="confirmacao_de_compra.php?id=5" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-sm-6">
    <div class="card mb-3" style="max-width: 800;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/apocalipse6.png" class="img-fluid rounded-start" alt="Apocalipse Zumbi">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Apocalipse Zumbi</h5>
            <p class="card-text">O queridinho dos espectadores de The Walking Dead e semelhantes, Apocalipse Zumbi é um dos mais requisitados, mas nem todos são capaze$ de arcar com os cu$to$.</p>
            <p class="card-text"><h5 style="color: green">R$ 110.678</h5></p>
            <a href="confirmacao_de_compra.php?id=6" class="btn btn-danger" style= "background-color:#81080C">Comprar</a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>

<?php
    include_once 'rodape.php';
?>