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
            <fieldset>
                <div class="inputBox">
                    <label for="nome"><b>Usuário</b></label>
                    <input type="text" name="txtusuario" id="txtusuario" class="inputUser" required>                    
                </div>
                <div class="inputBox">
                    <label for="nome"><b>Senha</b></label>
                    <input type="text" name="txtsenha" id="txtsenha" class="inputUser" required>                    
                </div>

                <button type="submit" name="btnlogin" class="btn" id="btnlogin">LOGIN</button>

            </fieldset>
    </form>
    </div>
      