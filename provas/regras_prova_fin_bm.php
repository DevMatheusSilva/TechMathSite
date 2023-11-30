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
        if(isset($_POST['verificacao']) && $_POST["verificacao"] == "bm-concluido"){
            echo '
            <h1 id="titulo01" style="text-align:center;margin-top:80px">Regras da Avaliação</h1>
            <br><h4 style="text-align: center">!!!! Preste Atenção às regras abaixo !!!</h4>
            <hr>
            <div class="container" id="regras">
                <p>
                    • O certificado de conclusão do curso só será liberado após o preenchimento de <strong>todas</strong> as questões <br>
                    • Ao todo serão 10 questões com 5 alternativas cada, cada questão só possui <strong>uma única</strong> resposta correta <br>
                    • As questões irão abordar <strong>todo o conteúdo compreendido neste curso</strong>, para tanto, <strong>você deverá tê-lo concluído</strong> antes de realizar esta avaliação<br>
                    • <strong>Nenhuma ajuda</strong> será prestada durante a prova, você deverá provar que aprendeu todos os conceitos abordados neste curso sem facilitações
                </p>
            </div>
            <hr>
            <h4 style="text-align: center">A equipe do TechMath te deseja uma Boa Sorte</h4><br>
            <a href="prova_bm.html"><button class="btn btn-dark btn-lg" style="margin-left: 45%;">Realizar Avaliação</button></a>
            ';
        } else {
            echo "<h1 id='feedback'>O curso ainda não foi finalizado</h1>";
            echo "<h4 style = 'text-align: center'>Voltar para a <a href='../bases_matematicas.html'>Página do curso</a></h4>";
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