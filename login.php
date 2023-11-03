<?php 
    include("conexao.php");

    if (isset($_POST['email']) || isset($_POST['senha'])){
        if (strlen($_POST['email']) == 0){
            echo "Preencha seu email";
        }
        else if (strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        }
    }
    else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);

        $qtdd = $sql_query->num_rows;

        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            
            if (!isset($_SESSION)){
                session_start();
            }
    
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
    
            header("Location: index.php");
        }
        else{
            echo "Falha ao logar, email ou senha incorretos";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>TechLogin - Bem vindo de volta</title>
</head>

<body>
    <div class="container-fluid" id="cabecalho">
        <div class="row align-items-center">
            <div class="col">
                <img src="imagens/logo(edit).png" alt="Logotipo_TechMath" id="logo"><!--<div>Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>-->
            </div>

            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                    <a class="navbar-brand" href="index.html">TechMath</a>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="cursos.html">Cursos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="painel.html">Painel</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="login.html">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container"> 
        <h1 style="margin-top: 100px;">Login</h1>
        <nav class="breadcrumb" id="breadcrumb_nav">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <form id="form" method="post" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Insira o seu Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email aqui" name="email">
                <small id="emailHelp" class="form-text text-warning">Use um email fictício</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha aqui" name="senha">
                <small id="emailHelp" class="form-text text-warning">Use uma senha fictícia</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termos">
                <label class="form-check-label" for="exampleCheck1">Aceito os termos e condições de TechMath</label>
            </div>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>

        <div class="container text-center" id="form">
            <p>Não possui uma conta ?</p>
            <a class="btn btn-dark" href="cadastro.php">Cadastrar-se</a>
        </div>
    </div>

      <br>

    <div class="container-fluid" id="rodape">
        <div class="row align-items-center">
            <div class="col-lg">
                <img src="imagens/logo(small).png" alt="logo pequena" id="logo_pequena">
                <div class="h6" id= "texto_rodape">Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>
                <p class="h6" id="texto_rodape">O TechMath é uma empresa fictícia sem fins lucrativos, criada com o único propósito de aprendizagem, quaisquer semelhanças com empresas o produtos reais são mera coincidência</p>
            </div>

            <div class="col-lg" id="info">
                <p class="h5">Contatos</p>
                <p class="h6"><strong>Telefone:</strong> 4693-6754</p>
                <p class="h6"><strong>Email:</strong>techmath778@gmail.com</p>
                <p class="h6"><strong>Assistência Técnica:</strong>suporte@gmail.com</p>
                <small class="h6" id= "texto_rodape">Dados Fictícios apenas para exemplicficação</small>
            </div>

            <div class="col-lg">
                <p class="h5">Acompanhe:</p>
                <a href="https://twitter.com/prof_ferretto?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="imagens/twitter_logo.png" alt="twitter logo"></a>
                <a href="https://www.facebook.com/ProfessorFerretto/?locale=pt_BR"><img src="imagens/facebook_logo.png" alt="facebook logo"></a>
                <a href="https://www.instagram.com/professorferretto/"><img src="imagens/instagram_logo.png" alt="instagram logo"></a>
                <a href="https://www.youtube.com/@professorferretto"><img src="imagens/youtube_logo.png" alt="youtube logo"></a>
                <div class="h6" id= "texto_rodape">Créditos ao canal Professor Ferreto que gravou a playlist de vídeos que utilizamos no link do nosso curso Bases Matemáticas</div>
            </div>        
    </div>
</body>
</html>