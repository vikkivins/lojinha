<!-- 
    TUDO O QUE FOR INSERIDO A PARTIR DA LINHA 36 SERÁ EXECUTADO TODA VEZ QUE O CÓDIGO ACHAR
    UM NOVO PRODUTO SALVO NO CARRINHO. IDEAL PARA GERAR TABELAS OU CRIAR CARDS DE CADA ITEM
    SALVO.
-->

<?php
    // A PARTIR DO EMAIL (IDENTIFICADOR DO USUÁRIO) FAZ A CONSULTA DO ID
    $consulta = $conecta -> prepare('SELECT * FROM tab_clientes WHERE cli_email = "'.$_COOKIE['email'].'"');
    $consulta -> execute();
    while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
        $cli_id = $linha['cli_id'];
    }

    // A PARTIR DO ID DO CLIENTE, CONSULTA OS PRODUTOS SALVOS NO CARRINHO
    $i = 0;
    $consulta = $conecta -> prepare('SELECT * FROM tab_carrinho WHERE cli_id = "'.$cli_id.'"');
    $consulta -> execute();

    // SALVAR NO VETOR prod_id TODOS OS INTENS SALVOS NO CARRINHO PELA ID DO PRODUTO
    while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
        $prod_id[$i] = $linha['prod_id'];
        $i++; // INCREMENTA A POSIÇÃO DO VETOR PARA SALVAR O PRÓXIMO ITEM
    }

    // PERCORRE O VETOR DO ID DOS PRODUTOS E BUSCA NO BANCO DE DADOS OS DETALHES, COMO NOME, DESCRIÇÃO E VALOR
    // CALCULA O TOTAL
    foreach ($prod_id as $n) {
        $consulta = $conecta -> prepare('SELECT * FROM tab_produtos WHERE prod_id = "'.$n.'"');
        $consulta -> execute();
        while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
            $prod_nome = $linha['prod_nome'];
            $prod_desc = $linha['prod_desc'];
            $prod_valor = $linha['prod_valor'];
            $total = $total + $prod_valor;
        }
    }
?>