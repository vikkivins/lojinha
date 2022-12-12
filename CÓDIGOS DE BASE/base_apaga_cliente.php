<!-- 
    ASSIM COMO EM TODO SCRIPT QUE ALTERA INFORMAÇÕES NO BANCO DE DADOS, É NECESSÁRIO SUBSTITUIR
    O NOME DAS TABELAS E COLUNAS CONFORME A NECESSIDADE
 -->

<?php
    include_once 'cabecalho.php';
    require_once 'conexao.php';

    $codigo=$_GET['id']; // OBTÉM O ID DO CLIENTE COM O MÉTODO GET

    // PREPARA UMA CONSULTA AO BANCO DE DADOS, USANDO O ID DO CLIENTE PARA APAGAR OS REGISTROS DAQUELA LINHA
    $exclui=$conecta->prepare('DELETE FROM tab_clientes WHERE cli_id=:codigo');
    $exclui->bindValue(':codigo', $codigo);
    $exclui->execute();

    header('Location: listagem_clientes.php'); // REDIRECIONA A LISTAGEM DE CLIENTES
    include_once 'rodape.php';
?>