<?php 
    require_once "conexao.php";

    if ($_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuarios VALUES (DEFAULT, '$email', '$senha');";

        if ($conexao-> query($sql)){
            echo "<br><h1>Dados salvos com sucesso</h1>";
        }else{
            echo "Erro: ".$sql."".$conexao->connect_error;
        }

        $conexao->close();
    }
?>
