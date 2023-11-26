<?php 
    $host = 'localhost';
    $username = 'root';
    $senha = '';
    $database = 'techmath';
    $conexao = new mysqli($host, $username, $senha, $database);
    
    if ($conexao->connect_error) {
        die(''. $conexao->connect_error);
    }
?>