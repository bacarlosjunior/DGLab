<?php

    //Passo 1 - Abrir conexao
    $conecta = mysqli_connect("sql305.epizy.com","epiz_24899394","B9gUXBeJI9ArOW","epiz_24899394_DGLab");
    //Passo 2 - Testar conexão
    if (mysqli_connect_errno() ) {
        die("Conexão falhou: " . mysqli_connect_errno());
    }
mysqli_set_charset($conecta,"utf8");
?>
