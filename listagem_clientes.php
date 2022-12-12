<?php
 include_once 'cabecalho.php';
 require_once 'conexao.php';
 $consulta=$conecta->prepare('SELECT * FROM tab_clientes');
 $consulta->execute();

 ?>

<title>CRUD - Lista de clientes</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <tr>
            <?php
                while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>";
                    echo "<td>{$linha['cli_id']}</td>";
                    echo "<td>{$linha['cli_nome']}</td>";
                    echo "<td>{$linha['cli_sobrenome']}</td>";
                    echo "<td>{$linha['cli_fone']}</td>";
                    echo "<td>{$linha['cli_data_nasc']}</td>";
                    echo "<td>{$linha['cli_email']}</td>";
                    echo "<td>{$linha['cli_senha']}</td>";
                    echo "<td><a href='altera_cliente.php?id={$linha['cli_id']}' class='btn-floating grey'><i class='material-icons'>edit</i></a></td>";
                    echo "<td><a href='action_exclui_cliente.php?id={$linha['cli_id']}' class='btn-floating' style='color:red'><i class='material-icons'>delete</i></a></td>";
                    echo "</tr>";
                }   
                echo " </tbody></table>";

                include_once 'rodape.php';
            ?>