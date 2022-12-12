<?php
    session_start();
    if($_COOKIE['login'] == TRUE){
            header("Location: index.php");
    }else if($_COOKIE['fail'] == TRUE){
        echo 'COLOCAR AQ A MSG DE ERRO';
        setcookie('fail', FALSE);
    }
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylelogin.css">
        <title>Login</title>

    </head>

    <body>

    <img src="img/logo_png.png" align="right" width="50" height="50"></img>

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

    </body>

</html>
