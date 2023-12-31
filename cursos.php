<?php 
    if(!isset($_SESSION)){
        session_start();
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
    <title>TechCursos - Estude com a gente</title>
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
                            <a class="nav-link active" href="cursos.php">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="painel.php">Painel</a>
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
    
    <br>
    
    <div class="container"> 
        <h1 style="margin-top: 100px;">Cursos Disponíveis</h1>
        <nav class="breadcrumb" id="breadcrumb_nav">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cursos</li>
            </ol>
        </nav>
    </div>

    <h1 class="text-center separacao" id="titulo01">Cursos Matemáticos</h1>

    <div class="container-fluid">
        <div class="container" id="cursos">
            <div class="row align-content-center">
                <div class="col-lg">
                    <div class="card alunos" style="width: 18rem;" id="card-01">
                        <img class="card-img-top" src="imagens/Bases Matemáticas (full).png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Bases Matemáticas</h5>
                            <p class="card-text">Curso envolvendo conceitos básicos sobre números, algarismos e operações fundamentais</p>
                            <?php
                            
                                include('bd/conexao.php');

                                $id_user = isset($_SESSION['id']) ? $_SESSION['id'] : null;
                                
                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Bases Matemáticas'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso1">
                                    <input type="hidden" value="Bases Matemáticas" name="curso[]">
                                    <input type="hidden" value="120:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                          
                                ?>
                                <a href="bases_matematicas.html" class="btn btn-dark">Continuar</a>
                                

                                <?php
                                    }
                                ?>       
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Matemática Fundamental I (full).png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Matemática Fundamental I</h5>
                            <p class="card-text">Aprofundamento Teórico sobre conjuntos numéricos, bases numéricas, e introdução a funções/relações</p>
                            <?php                                      

                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Matemática Fundamental I'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso2">
                                    <input type="hidden" value="Matemática Fundamental I" name="curso[]">
                                    <input type="hidden" value="100:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                        
                                ?>
                                <a href="#" class="btn btn-dark">Continuar</a>
                                
                                <?php
                                    }
                                ?>       
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Matemática Fundamental II.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Matemática Fundamental II</h5>
                            <p class="card-text">Funções, Relações, e aprofundamento do conteúdo intermediário de matemática</p>
                            <?php                               

                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Matemática Fundamental II'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso3">
                                    <input type="hidden" value="Matemática Fundamental II" name="curso[]">
                                    <input type="hidden" value="80:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                        
                                ?>
                                <a href="#" class="btn btn-dark">Continuar</a>
                                

                                <?php
                                    }
                                ?>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg separacao">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Matemática Superior.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Matemática Superior</h5>
                            <p class="card-text">Conteúdo referente à matemática de ensino superior</p>

                            <!--Fazendo a inscrição em um curso-->
                            <?php
                                                               
                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Matemática Superior'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso4">
                                <input type="hidden" value="Matemática Superior" name="curso[]">
                                <input type="hidden" value="40:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                    
                                    
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg separacao">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Geometria.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Geometria</h5>
                            <p class="card-text">Curso completo sobre Geometria plana e Espacial</p>
                            <?php                              

                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us on us.id_user = ma.usuario join cursos c on c.id_curso = ma.curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);

                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Geometria'){
                                        $aux = 1;
                                    }
                                }

                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso5">
                                    <input type="hidden" value="Geometria" name="curso[]">
                                    <input type="hidden" value="20:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                        
                                ?>
                                    <a class="btn btn-dark" href="#">Continuar</a>
                                
                                   
                                <?php
                                    }
                                ?>
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg separacao">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Funções.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Funções</h5>
                            <p class="card-text">Curso focado no ensino das funções matemáticas, usando o software GeoGebra para exemplificação prática</p>
                            <?php                              
                                
                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Funções'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso6">
                                    <input type="hidden" value="Funções" name="curso[]">
                                    <input type="hidden" value="80:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                        
                                        
                                ?>
                                    <a class="btn btn-dark" href="#">Continuar</a>
                                

                                <?php
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg separacao centro">
                    <div class="card alunos" style="width: 18rem;">
                        <img class="card-img-top" src="imagens/Bases Numéricas.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Bases Numéricas</h5>
                            <p class="card-text">Matemática de nível computacional, focada nas bases numéricas e sua relação entre si</p>
                            <?php                              

                                //Verifcando se o usuário já esta fazendo o curso
                                $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                                on ma.usuario = us.id_user join cursos c 
                                on ma.curso = c.id_curso where us.id_user = '$id_user';";
                                $sql_query = $conexao->query($sql_curso);
                                
                                $aux = 0;

                                while($dados = $sql_query->fetch_assoc()){
                                    if($dados['nome'] == 'Bases Numéricas'){
                                        $aux = 1;
                                    }
                                }
                                if($aux == 0){

                                ?>
                                <form action="painel.php" method="post" id="curso7">
                                    <input type="hidden" value="Bases Numéricas" name="curso[]">
                                    <input type="hidden" value="30:00:00" name="curso[]">
                                    <button class="btn btn-dark">Fazer este Curso</button>
                                </form>
                                <?php
                                    }else{
                                        
                                        
                                ?>
                                    <a class="btn btn-dark" href="#">Continuar</a>
                                

                                <?php
                                    }
                                ?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center separacao" id="titulo01">Cursos Computacionais</h1>

    <div class="container" id="cursos">
        <div class="row align-content-center">
            <div class="col-lg">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/Word.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Word</h5>
                        <p class="card-text">Curso Básico de Microsoft Word</p>
                        <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'Word'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="Word" name="curso[]">
                                <input type="hidden" value="40:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                    
                                    
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>         
    
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/Excel.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Excel</h5>
                        <p class="card-text">Curso Básico de Microsoft Excel</p>
                        <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'Excel'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="Excel" name="curso[]">
                                <input type="hidden" value="60:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/VBA .png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">VBA - Visual Basic for Application</h5>
                        <p class="card-text">Curso complementar para Excel</p>
                         <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'VBA'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="VBA" name="curso[]">
                                <input type="hidden" value="70:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg separacao">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/Java .png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Linguagem Java</p>
                         <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'Java'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="Java" name="curso[]">
                                <input type="hidden" value="120:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-lg separacao">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/GeoGebra.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">GeoGebra</h5>
                        <p class="card-text">Uso Prático do GeoGebra</p>
                         <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'GeoGebra'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="GeoGebra" name="curso[]">
                                <input type="hidden" value="40:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-lg separacao">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/Excel Estatística.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Estatística com Excel</h5>
                        <p class="card-text">Curso prático de Estatística no Excel</p>
                         <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'Estatística com Excel'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="Estatística com Excel" name="curso[]">
                                <input type="hidden" value="80:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>

            <div class="col-lg separacao centro">
                <div class="card alunos" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/GeoGebra Estatística.png" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Estatística com GeoGebra</h5>
                        <p class="card-text">Curso apresentando as principais ferramentas para análise estatística usando GeoGebra</p>
                         <?php                              

                            //Verifcando se o usuário já esta fazendo o curso
                            $sql_curso = "SELECT c.nome from matricula ma join usuarios us 
                            on ma.usuario = us.id_user join cursos c 
                            on ma.curso = c.id_curso where us.id_user = '$id_user';";
                            $sql_query = $conexao->query($sql_curso);
                            
                            $aux = 0;

                            while($dados = $sql_query->fetch_assoc()){
                                if($dados['nome'] == 'Estatística com GeoGebra'){
                                    $aux = 1;
                                }
                            }
                            if($aux == 0){

                            ?>
                            <form action="painel.php" method="post" id="curso7">
                                <input type="hidden" value="Estatística com GeoGebra" name="curso[]">
                                <input type="hidden" value="40:00:00" name="curso[]">
                                <button class="btn btn-dark">Fazer este Curso</button>
                            </form>
                            <?php
                                }else{
                                         
                            ?>
                                <a class="btn btn-dark" href="#">Continuar</a>
                            
                            <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
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