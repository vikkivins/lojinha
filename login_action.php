<!-- 
    O MÉTODO USADO PARA LOGIN SE MANTÉM O MESMO, PORÉM, É NECESSÁRIO MODIFICAR O NOME DAS TABELAS
    UTILIZADAS E DAS COLUNAS REFERENTES AS CREDENCIAIS DE LOGIN
 -->

<?php
    include_once 'conexao.php'; // INCLUI O SCRIPT QUE CONECTA AO BANCO DE DADOS VIA PDO

    // PEGA AS CREDENCIAIS DE LOGIN DO USUÁRIO ATRAVÉS DO MÉTODO POST, PROVENITENTE DO FORMULÁRIO DE LOGIN
    $usuario = $_GET['txtusuario']; 
    $senha = $_GET['txtsenha'];
    $nome = "";

    echo $usuario."<br>".$senha;
    
    // PEGA NA TABELA OS CAMPOS DE USUÁRIO E SENHA QUE BATEM COM O QUE FOI INSERIDO PELO USUÁRIO
    $sql = $conecta->query("select * from tab_clientes WHERE cli_email = '".$usuario."' and cli_senha = '".$senha."'");
    
    // FAZ UMA CONSULTA PARA PEGAR O NOME DO USUÁRIO
    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_email = '".$usuario."'");
    $consulta -> execute();
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
      $nome = $linha['cli_nome']; // SALVA O NOME EM UMA VARIÁVEL
    }
    foreach($sql as $linha){
      $db_usuario = $linha['cli_email']; // SALVA O EMAIL EM UMA VARIÁVEL
      $db_senha = $linha['cli_senha']; // SALVA A SENHA EM UMA VARIÁVEL
    }
    // SE O USUÁRIO OU SENHA FOREM NULOS, OU NÃO BATEREM COM AS INFORMAÇÕES DO BANCO DE DADOS;
    if ($usuario == NULL || $senha == NULL || $usuario != $db_usuario || $senha != $db_senha) {
        // MENSAGEM DE ERRO
        echo "ACESSO NEGADO";
        setcookie('fail', TRUE);
        header("Location: login.php"); // REDIRECIONA DE VOLTA A PÁGINA DE LOGIN
    }else if($usuario == $db_usuario && $senha == $db_senha){ // CASO AS CREDENCIAIS ESTEJAM CORRETAS
        setcookie('login', TRUE, time()+3600); // SALVA UM COOKIE QUE INDICA O ESTADO DE LOGIN COM TRUE ou FALSE
        setcookie('usuario', $nome, time()+3600); // SALVA UM COOKIE QUE GUARDA O NOME DO USUÁRIO
        setcookie('email', $usuario, time()+3600); // SALVA UM COOKIE QUE GUARDA O EMAIL DO USUÁRIO, IDENTIFICADOR ÚNICO
        header("Location: index.php"); // REDIRECIONA A PÁGINA INICIAL
    }else{
      echo "ERRO";
    }
?>