<?php require_once("conexao.php"); ?>

<?php

    //teste de segurança
    session_start();
    if(!isset($_SESSION["user_portal"])){
        header("location:index.php");
        //break;
    } // fim do teste

    $cpf_usuario = $_SESSION["user_portal"];

    // Consulta ao banco de dados
    $consulta = "SELECT * ";
    $consulta .= "FROM usuario ";
    $consulta .= "WHERE CPF = {$cpf_usuario} ";
    $detalhe    = mysqli_query($conecta,$consulta);

    // Testar erro
     if ( !$detalhe ) {
        die("Falha no Banco de dados");
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
        $usuarioID      = $dados_detalhe["usuarioID"];
        $nome    = $dados_detalhe["nome"];
        $cpf    = $dados_detalhe["CPF"];
        $email      = $dados_detalhe["email"];
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema DGLab</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/usuario_detalhe.css" rel="stylesheet">
    </head>

    <body>

        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="detalhe_usuario">
                <ul>
                    <li class="imagem"><img src="assets/avatar2.png"></li>

                    <li><b>Nome: </b><?php echo $nome ?></li>
                    <li><b>Código de identificação: </b><?php echo $usuarioID ?><br><br></li>
                    <li><b>CPF: </b><?php echo $cpf ?>      <b>Email: </b><?php echo $email ?><br></li>                 
                </ul>
                
                    <button class="btn " onclick="location.href='pdf.php'">Gerar PDF </button>

            </div>


        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>