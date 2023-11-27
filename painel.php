<?php 
    include("bd/protect.php");
    include ('bd/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>TechPainel - Acompanhe seus cursos</title>
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
                            <a class="nav-link" href="cursos.php">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="painel.php">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.html">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container"> 
        <h1 style="margin-top: 100px;">Painel de 
        <?php
            echo $_SESSION['nome_usuario'];
        ?></h1>
        <nav class="breadcrumb" id="breadcrumb_nav">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Meu Painel</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card bg-warning text-white" style="width: 18rem; margin-top: 100px;">
                    <img class="card-img-top" src="imagens/curso_realizado_icone.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <p class="card-text h3">Meus Cursos</p>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <p class="h3 text-center total">Cursos em andamento: 5</p>
                <?php
               //Recebendo valores
                if(isset($_POST['curso'][0], $_POST['curso'][1])){
                    $nomeCurso = $_POST['curso'][0];
                    $horasCurso = $_POST['curso'][1];
                    $id_user = $_SESSION['id'];

                    //Achando o id do curso
                    $sql = "SELECT * from cursos where nome = '$nomeCurso'";
                    $sql_query_curso = $conexao->query($sql);
                    $dados = $sql_query_curso->fetch_assoc();
            
                    $id_curso = isset($dados['id_curso']) ? $dados['id_curso'] : null;
                    $_SESSION['id_curso'] = $id_curso;
            
                    //impdindo que o usuário adicione o mesmo curso duas vezes
                    $sql = "SELECT * from matricula where usuario = '$id_user' and curso = '$id_curso'";
                    $sql_query_user = $conexao->query($sql);
            
                    //adicionando valores nas tabelas
                    if($sql_query_user->num_rows == 0){
            
                        if($sql_query_curso->num_rows == 0){
                            
                            $sql = "INSERT into cursos values (default, '$nomeCurso', '$horasCurso')";
                            $conexao->query($sql);
            
                            $id_curso = $conexao->insert_id;
            
                            $sql = "INSERT into matricula values ('$id_user', '$id_curso')";
                            $conexao->query($sql);
            
                        }else{
                            $sql = "INSERT into matricula values ('$id_user', '$id_curso')";
                            $conexao->query($sql);
                        }
                    }
                }
            ?>
            
                <ul style="margin-top: 50px;">
                    <li><p class="h3">Bases Matemáticas</p></li>
                    <li><p class="h3">Java</p></li>
                    <li><p class="h3">Excel</p></li>
                    <li><p class="h3">GeoGebra</p></li>
                    <li><p class="h3">Geometria</p></li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid">
        <p class="h3 text-center total">Ir para a página de cursos: <br> <a href="cursos.php">Cursos</a></p>
        <br>
    </div>

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