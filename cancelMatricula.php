<?php 
    include('bd/conexao.php');

    if(!isset($_SESSION)){
        session_start();
    }

    $id_user = $_SESSION['id'];

    $sql = "DELETE FROM matricula where usuario = '$id_user'";
    $conexao->query($sql);

    header('location: painel.php')

?>