<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        if(!isset($_SESSION)){
            session_start();
        }

        //se não for o usuario com a id, proibe de entrar nessa página
        if (!isset($_SESSION['id'])){
            die("<div style='position: absolute; top: 50%; left: 50%; transform:    translate(-50%, -50%); text-align: center;'>
            
                    <h1>Você não pode acessar essa página porque não esta logado</h1>

                    <div style='display=flex; justify-content: center'><a href = 'login.html'><button class='btn btn-dark'>Entrar</button></a></div>

                </div>");
        }
    ?>
</body>
</html>