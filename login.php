<?php
    session_start();
    require_once 'cabecalho.php';
    if($_COOKIE['login'] == TRUE){
            header("Location: index.php");
    }else if($_COOKIE['fail'] == TRUE){
        echo 'COLOCAR AQ A MSG DE ERRO';
        setcookie('fail', FALSE);
    }
?>

<body>
    <div class="box">
        <form method="POST" action="action_action.php">
        <body>

<div id="login">

    <form class="card">

        <div class="card-header">

            <h2>Login</h2>

        </div>

        <div class="card-content">

            <div class="card-content-area">

                <label for="usuario">Usuário</label>

                <input type="text" name="txtusuario" id="txtusuario" class="inputUser" required> 

            </div>

            <div class="card-content-area">

                <label for="password">Senha</label>

                <input type="password" name="txtsenha" id="txtsenha" class="inputUser" required>

            </div>

        </div>

        <div class="card-footer">

            <input type="submit" value="login" class="submit">

            <a href="#" class="recuperar_senha">Esqueceu a senha?</a>

        </div>
    </form>
    </div>
      