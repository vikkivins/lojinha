<!-- 
    CRIA UMA TABELA DA LISTAGEM DE CLIENTES, PERSONALIZÁVEL COM ELEMENTOS EM CSS.
    AS INFORMAÇÕES DE USUÁRIO SÃO PEGAS DE COOKIES SALVOS DURANTE O LOGIN
 -->
<h1>Lista de clientes</h1>
<table border=1 style="color:black;">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Data de nascimento</th>
        <th colspan="2">Ações</th>
    </tr>
<?php

    // A PARTIR DO NOME DO CLIENTE LOGADO, BUSCA OS DADOS NECESSÁRIOS PARA A LISTAGEM
    $consulta = $conecta -> prepare("SELECT * FROM tab_clientes WHERE cli_nome = '".$_COOKIE['usuario']."'");
    $consulta -> execute();
    
    while($linha  = $consulta -> fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>{$linha['cli_id']}</td>";
        echo "<td style='margin:5px'>{$linha['cli_nome']}</td>";
        echo "<td>{$linha['cli_sobrenome']}</td>";
        echo "<td>{$linha['cli_email']}</td>";
        echo "<td>{$linha['cli_cpf']}</td>";
        echo "<td>{$linha['cli_fone']}</td>";
        echo "<td>{$linha['cli_data_nasc']}</td>";
        echo "<td><a class='btn btn-danger' role='button' href='action_exclui_cliente.php?id={$linha['cli_id']}'>Excluir</a></th>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
?>