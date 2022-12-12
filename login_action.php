<?php
 include_once 'cabecalho.php';

    session_start();

    include_once 'conexao.php';

    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];
    
    $sql = $conecta->query("select * from tab_clientes WHERE cli_user = ' ".$usuario." ' and cli_senha = ' ".$senha." ' ");
    foreach($sql as $linha){
        $db_usuario = $linha['cli_user'];
        $db_senha = $linha['cli_senha'];
    }

    if ($usuario == NULL || $senha == NULL || $usuario != $db_usuario || $senha != $db_senha) {
        echo "ACESSO NEGADO";
        header("Location: a13_form.php"); //formulario login
    }else if ($usuario == $db_usuario && $senha == $db_senha){
        $_SESSION['usuario'] = $usuario;
        header("Location: produtos.php"); //index
    }
    
include_once 'rodape.php'
?>