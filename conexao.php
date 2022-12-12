<?php
    $conecta= new PDO("mysql:dbname=db_exemplo;host=localhost", "root","");
    try{
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'ERROR:'.$e->getMessage();
    }
    echo "conexao tops";
?>