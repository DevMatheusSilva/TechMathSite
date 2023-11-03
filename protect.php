<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">    
    <title>Erro de Acesso</title>
</head>
<body>
<div class="container-fluid" id="cabecalho">
        <div class="row align-items-center">
            <div class="col">
                <img src="imagens/logo(edit).png" alt="Logotipo_TechMath" id="logo"><!--<div>Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>-->
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                    <a class="navbar-brand active" href="index.html">TechMath</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="cursos.html">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="painel.html">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div style="margin-top: 10%;margin-left: 39%;width:24%; padding: 11px;">
        <?php
            if (!isset($_SESSION)){
                session_start();
            }
            if (!isset($_SESSION["id"])){
                die("Você não pode acessar essa página se não estiver conectado<p><a href =\"login.php\" class = \"btn btn-dark\" style = \"margin-top: 3%;margin-left: 40%\">Entrar</a></p>");
            }
        ?>
</body>
</html>