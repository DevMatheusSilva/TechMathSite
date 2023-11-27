<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <title>TechProva - Boa Sorte</title>
</head>

<body>
    <div class="container-fluid" id="cabecalho">
        <div class="row align-items-center">
            <div class="col">
                <img src="../imagens/logo(edit).png" alt="Logotipo_TechMath" id="logo"><!--<div>Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>-->
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                    <a class="navbar-brand" href="../index.html">TechMath</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../cursos.html">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../painel.php">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cadastrar.html">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php 
        $pontuacao = 0;

        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];
        
        if ($q1 == 'b'){
            $pontuacao += 10;
        }
        if ($q2 == 'a'){
            $pontuacao += 10;
        }
        if ($q3 == 'c'){
            $pontuacao += 10;
        }
        if ($q4 == 'c'){
            $pontuacao += 10;
        }
        if ($q5 == 'c'){
            $pontuacao += 10;
        }
        if ($q6 == 'd'){
            $pontuacao += 10;
        }
        if ($q7 == 'd'){
            $pontuacao += 10;
        }
        if ($q8 == 'b'){
            $pontuacao += 10;
        }
        if ($q9 == 'e'){
            $pontuacao += 10;
        }
        if ($q10 == 'b'){
            $pontuacao += 10;
        }

        if ($pontuacao > 75){
            header ("Location: certificado_bm.html");
        } else {
            echo "<h1 id = 'feedback'>Pontuação Insuficiente</h1>";
            echo "<h4 style = 'text-align: center'><a href='../bases_matematicas.html'>Clique Aqui</a> para voltar para a página do curso</h4>";
        }
    ?>

    <div class="container-fluid" id="rodape" style="margin-top: 200px">
        <div class="row align-items-center">
            <div class="col-lg">
                <img src="../imagens/logo(small).png" alt="logo pequena" id="logo_pequena">
                <div class="h6" id= "texto_rodape">Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>
                <p class="h6" id="texto_rodape">O TechMath é uma empresa fictícia sem fins lucrativos, criada com o único propósito de aprendizagem, quaisquer semelhanças com empresas o produtos reais são mera coincidência</p>
            </div>

            <div class="col-lg" id="info">
                <p class="h5">Contatos</p>
                <p class="h6"><strong>Telefone:</strong> 4693-6754</p>
                <p class="h6"><strong>Email:</strong>techmath778@gmail.com</p>
                <p class="h6"><strong>Assistência Técnica:</strong>suporte@gmail.com</p>
                <small class="h6" id= "texto_rodape">Dados Fictícios apenas para exemplificação</small>
            </div>

            <div class="col-lg">
                <p class="h5">Acompanhe:</p>
                <a href="https://twitter.com/prof_ferretto?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="../imagens/twitter_logo.png" alt="twitter logo"></a>
                <a href="https://www.facebook.com/ProfessorFerretto/?locale=pt_BR"><img src="../imagens/facebook_logo.png" alt="facebook logo"></a>
                <a href="https://www.instagram.com/professorferretto/"><img src="../imagens/instagram_logo.png" alt="instagram logo"></a>
                <a href="https://www.youtube.com/@professorferretto"><img src="../imagens/youtube_logo.png" alt="youtube logo"></a>
                <div class="h6" id= "texto_rodape">Créditos ao canal Professor Ferreto que gravou a playlist de vídeos que utilizamos no link do nosso curso Bases Matemáticas</div>
        </div>        
    </div>
</body>
</html>