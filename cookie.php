<?php
   include_once 'cabecalho.php';

  session_start();
    $produto = $_GET['prod'];
  //setcookie()
  if(isset($produto)){
    echo "<h3>Dados do produto selecionado:</h3>";
    echo "Código: $produto<br>";
    echo "<img src='img/apoca$produto.png' height='250' width='250'><br>";
   switch ($produto) {
      case 1:
     
      $apocalipse = 'Apocalipse Nuclear';
      $preco = 23.248;
         break;
      case 2:
         $apocalipse = 'Apocalipse Meteoro';
         $preco = 20.199;
         break;
      case 3:
         $apocalipse = 'Apocalipse Incendiario';
         $preco = 18.327;
         break;
      case 4:
         $apocalipse = 'Apocalipse Tornado';
         $preco = 15.112;
         break;
      case 5:
         $apocalipse = 'Apocalipse Tsunami';
         $preco = 27.463;
         break;
      case 6:
         $apocalipse = 'Apocalipse Zumbi';
         $preco = 110.678;
         break;
      default:
         $apocalipse = "nenhum apocalipse selecionado";
         $preco = 0;
         break;
   }
  echo "$apocalipse <br> R$ $preco";
  echo "<br><br><a href='a13_produto.php'>FINALIZAR COMPRA</a>";
  setcookie("usuario", $_SESSION['usuario'], 3600);
  setcookie("descricao", $apocalipse, 3600);
  setcookie("preco", $preco, 3600);

  }
  else{
   $tenis = "nenhum tênis selecionado<br>";
   $preco = 0;
  }
  setcookie("produto", $produto, time()+3600);
  setcookie("descricao", $apocalipse, time()+3600);
  setcookie("preco", $preco, time()+3600);
  setcookie("usuario", $_SESSION['usuario'], time()+3600);

  include_once 'rodape.php';

?>
