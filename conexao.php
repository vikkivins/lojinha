<?php
    $conecta= new PDO("mysql:dbname=victoria_db;host=localhost", "root","zwr1yxjkbw");
    try{
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'ERROR:'.$e->getMessage();
    }
    echo "conexao tops";
?>