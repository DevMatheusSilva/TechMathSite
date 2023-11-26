<?php 
    require_once "conexao.php";

    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    if ($result->num_rows>0){
        $usuario = $result->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }
    }
?>