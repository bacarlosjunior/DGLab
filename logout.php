<?php require_once("conexao/conexao.php"); ?>
<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>  
            <?php
                //Excluir a variavel de sessao mencionada
                unset($_SESSION["usuario"]);
                //Destroi todas as variaveis de sessao do app
                //session_destroy();
            ?>
            
        </main>

        <footer>
            <div id="footer_central">
                 <p>Sistema web desenvolvido como forma de avalição para o processo de estágio DGLab.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>
