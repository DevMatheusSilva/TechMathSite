<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <title>TechCadastro - Bem-Vindo</title>
</head>
<body>
    <div class="container-fluid" id="cabecalho">
        <div class="row align-items-center">
            <div class="col">
                <img src="../imagens/logo(edit).png" alt="Logotipo_TechMath" id="logo"><!--<div>Logótipo feito com <a href="https://www.designevo.com/pt/" title="Criador de Logótipos Online Grátis">DesignEvo</a></div>-->
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
                    <a class="navbar-brand active" href="../index.html">TechMath</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../cursos.html">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../painel.php">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../cadastrar.html">Cadastro</a>
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
        require_once "conexao.php";

        if ($_POST){
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $nome_usuario = $_POST["nome_usuario"];

            //Pegando todos os usuários
            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND nome_usuario = '$nome_usuario'";

            $result = $conexao->query($sql);

            $usuarios = $result->fetch_assoc();

            //Verificando se o usuário já está cadastrado
            if($usuarios != NULL && ($usuarios['email'] == $email || $usuarios['senha'] == $senha || $usuarios['nome_usuario'] == $nome_usuario)){
                die("<h1 id='feedback'>Usuário $nome_usuario já cadastrado</h1><br><h4 style='text-align: center'>Faça o <a href='../login.html'>Login</a> novamente ou <a href='../cadastrar.html'>Cadastre-se</a></h4>");
            }else{

                $sql = "INSERT INTO usuarios VALUES (DEFAULT, '$email', '$nome_usuario', '$senha');";

                if ($conexao-> query($sql)){
                    header ("Location: ../painel.php");
                
                    if($_POST){
                        //se o email não for preenchido
                        if(strlen($_POST["email"] == 0)){
                            echo "<h1 id='feedback'>Preencha seu email</h1>";
                        } 
                        else {
                            //se a senha não for preenchida
                            if(strlen($_POST["senha"]) == 0){
                                echo "<h1 id='feedback'>Preencha sua senha</h1>";
                            } 
                            else {
                                //se o nome de usuario não for preenchido
                                if(strlen($_POST["nome_usuario"]) == 0){
                                    echo "<h1>Preencha o nome de Usuário</h1>";
                                }
                                //se todos forem preenchidos
                                else {
                                    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND nome_usuario = '$nome_usuario'";

                                    $result = $conexao->query($sql);

                                    if($result->num_rows == 1){
                                        $usuario = $result->fetch_assoc();

                                        if(!isset($_SESSION)){
                                            session_start();
                                        }

                                        $_SESSION["nome_usuario"] = $usuario["nome_usuario"];
                                        $_SESSION["id"] = $usuario["id"];
                                    } else {
                                        if($result->num_rows > 1){
                                            die("<h1 id = 'feedback'>Usuário já cadastrado no Sistema</h1>");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }else{
                    echo "<h1 id='feedback'>Erro: ".$sql."".$conexao->connect_error."</h1>";
                    $conexao->close();  
                }
            }
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