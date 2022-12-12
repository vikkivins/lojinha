<!-- 
    ASSIM COMO PARA O LOGIN, ESTE MÉTODO SE MANTÉM O MESMO, APENAS OS CAMPOS DE NOME DA TABELA E NOME
    DAS COLUNAS SÃO ALTERADOS CONFORME A NECESSIDADE
 -->

<?php
    include_once 'cabecalho.php';
    include_once 'conexao.php';
    
    // PEGA AS INFORMAÇÕES QUE SERÃO MODIFICADAS VIA MÉTODO POST
    $codigo = $_POST['txtid'];
    $nome = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $fone  = $_POST['txtfone'];
    $data = $_POST['txtdatanasc'];

    // PREPARA UMA CONSULTA AO BANCO DE DADOS
    $altera = $conecta -> prepare("UPDATE tab_clientes SET cli_nome  = :nome, cli_sobrenome = :sobrenome, cli_fone = :fone, cli_data_nasc = :dt_nasc WHERE cli_id = :codigo");

    // ANEXA OS VALORES AOS IDENTIFICADORES DOS CAMPOS
    $altera -> bindValue(':nome', $nome);
    $altera -> bindValue(':sobrenome', $sobrenome);
    $altera -> bindValue(':fone', $fone);
    $altera -> bindValue(':dt_nasc', $data);
    $altera -> bindValue(':codigo', $codigo);
    
    // EXECUTA AS MODIFICAÇÕES
    $altera -> execute();

    // REDIRECIONA A PÁGINA DE LISTAGEM DE CLIENTES (MUDAR URL CONFORME NECESSIDADE)
    header('Location: listagem_clientes.php');

    include_once 'rodape.php';
    ?>