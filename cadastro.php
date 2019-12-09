<?php require_once("conexao.php"); ?>

<?php
    //inserçao no banco
if(isset($_POST["CPF"])){
        $cpf = $_POST["CPF"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $erro = 0;
        
        if(empty($cpf)){
            $mensagem = "Favor digitar seu CPF sem pontos e traços.<br>";
            $erro += 1;

        }

        if(empty($nome) OR strstr($nome, ' ')==false){
            $mensagem = "Favor digitar o seu nome corretamente.<br>";
            $erro += 1;
        }

        if(strlen($email)< 8 || strstr($email, '@')==false){
            $mensagem = "Favor digitar o seu email corretamente.<br>";
            $erro += 1;

        }

        if(empty(strlen($senha)> 8)){
            $mensagem = "Favor digitar sua senha com mais de 8 caracteres.<br>";
            $erro += 1;

        }

        if(empty($endereco)){
            $mensagem = "Favor digitar o seu endereco corretamente.<br>";
            $erro += 1;
        }

        if(empty($cep)){
            $mensagem = "Favor digitar o seu CEP corretamente.<br>";
            $erro += 1;
        }

        if(empty($cidade)){
            $mensagem = "Favor digitar a sua cidade corretamente.<br>";
            $erro += 1;

        }
         if(empty($estado)){
            $mensagem = "Favor digitar o seu estado corretamente.<br>";
            $erro += 1;

        }

        if($erro == 8){
            $mensagem = "Cadastro sem sucesso.<br>";


        }

        if($erro == 0){
            //echo "Todos os campos foram preenchidos corretamente.<br>";
            include 'insere.php';
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
        
    </head>

    <body>
         <header>
            <div id="header_central">
                <img src="assets/logo4.jpeg" style = "cursor:pointer;"
                     onclick="location.href='index.php'"> 
                <img src="assets/descricao2.png">
        </header>
        
        <main>  
            <div id="janela_formulario">

                <form action="cadastro.php" method ="post">
                    <input type="text" name="CPF" placeholder="CPF (Somente números)">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="text" name="endereco" placeholder="Endereço">
                    <input type="text" name="cep" placeholder="CEP (Somente números)">
                    <input type="text" name="cidade" placeholder="Cidade">
                    <input type="text" name="estado" placeholder="Estado">
                    <input type="submit" value="Inserir"> 

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

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>