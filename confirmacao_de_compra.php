<?php
require_once 'cabecalho.php';
require_once 'conexao.php';
$id = $_GET['id'];
$consulta=$conecta->prepare('SELECT * FROM tab_produtos WHERE idprod = "'.$id.'"');
$consulta->execute();
while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
echo "<div class='row justify-content-center' style = 'margin-top: 15px;'>
<div class='col-sm-6'>
    <div class='card mb-3' style='max-width: 800;'>
    <div class='row g-0'>
    <div class='row justify-content-center' style = 'margin-top: 15px;'>
        <img class='justify-content-center' style='width: 400px; height: 400px;'src='img/".$linha['imgprod']."' class='img-fluid rounded-start' alt='Logo'>
    </div>
        <!-- <div class='col-md-7'> -->
        <div class='card-body'>
            <center><h2 class='card-text' style= 'color:#81080C'>FINALIZAR COMPRA?</h2><br><br>
            <h5 class='card-title'>".$linha['nomeprod']."</h5>
            <p class='card-text'>
           ".$linha['descprod']."
          <br><br><a href='index.php' class='btn btn-danger' style= 'background-color:#81080C'>Finalizar Compra</a>
           </center>
            </p>
        </div>
        <!-- </div> -->
    </div>
    </div>";
}

?>

