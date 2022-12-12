<?php
    session_start();
    include_once 'conexao.php';
    setcookie('login', FALSE);
    header('Location: index.php');
?>