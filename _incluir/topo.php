<header>
    <div id="header_central">
        <?php
            if(isset($_SESSION["user_portal"])){
                $user = $_SESSION["user_portal"];
                
                $saudacao = "SELECT nome ";
                $saudacao .= "FROM usuario ";
                $saudacao .= "WHERE CPF = {$user}";
                
                $saudacao_login = mysqli_query($conecta,$saudacao);
                if(!$saudacao_login){
                    die("Falha no banco");
                    
                }
                
                $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                $nome = $saudacao_login["nome"];
            
        ?>
            <div id="header_saudacao"><h3>Bem vindo, <?php echo $nome ?> - <a href="sair.php"> Sair</a></h3></div>
        
        <?php
            }
        ?>
        
                <img src="assets/logo4.jpeg" style = "cursor:pointer;"
                     onclick="location.href='detalhe.php'">   
                <img src="assets/descricao2.png">
</header>