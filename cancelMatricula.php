<?php 
    include('bd/conexao.php');

    $sql = "truncate matricula;";
    $conexao->query($sql);

    header('location: painel.php')

?>