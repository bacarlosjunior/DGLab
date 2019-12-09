<?php require_once("conexao.php"); ?>

<?php
    //adicionar variaveis de sessao
    session_start();

    if(isset($_POST["email"])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
  
        $login = "SELECT * ";
        $login .= "FROM usuario ";
        $login .= "WHERE email = '{$email}' and senha = '{$senha}' ";
        
        $acesso = mysqli_query($conecta, $login);
        
        if(!$acesso){
            die("Falha na consulta ao banco");
        }
        
        $informacao = mysqli_fetch_assoc($acesso);
        
        if(empty($informacao)){
            $mensagem = "Login sem sucesso."; 
            
        } else{
            $_SESSION["user_portal"] = $informacao["CPF"];
            header("location: detalhe.php");
            
        }

    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema DGLab</title>
        
        <!-- estilo -->
            <header>
            <style type="text/css">
            
                body {
                    background-image: url(assets/teste2.jpg);
                }
            </style>
            <div id="header_central">
            <link href="_css/crud.css" rel="stylesheet">
            <link href="_css/estilo.css" rel="stylesheet">
            <link href="_css/login.css" rel="stylesheet">
        
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo4.jpeg" style = "cursor:pointer;"
                     onclick="location.href='index.php'"> 
                <img src="assets/descricao2.png">
            </div>
            <main>
            <div id="header_saudacaoL">
                <h3><a href="cadastro.php" style =" color: #000000">Cadastrar</a></h3>
            </div>
            </main>

           

        </header>
        
        <main>  
            <div id="janela_login">
                <form action ="index.php" method="post">
                    <h2>Login</h2>
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Entrar">                  

                    <?php
                        if(isset($mensagem)){
                            
                    ?>
                        <p><?php echo $mensagem ?></p>
                        
                    
                    <?php
                            
                        }
                    ?>
                 
                </form>
            </div>
        </main>

        <footer>
            <div id="footer_central">
                <p>Sistema web desenvolvido como forma de avalição para o processo de estágio DGLab</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>