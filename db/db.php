<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'funcionarios';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
    echo "Erro na conexão";
    }
    else{
    echo "Conexão efetuada com sucesso";
    }
?>