<?php require_once("conexao.php"); 
   

$cpf = $_POST["CPF"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$inserir = "INSERT INTO usuario (CPF,nome,email,senha,endereco,cep,cidade,estado) VALUES ";

$inserir .="('$cpf','$nome','$email','$senha','$endereco','$cep','$cidade','$estado')";
  		
if($conecta->query($inserir)===TRUE){
	//echo "usuario inserido com sucesso!";
	header("location:index.php");

}

	else{
		echo "Erro: " .$inserir . "<br>" .$conecta->error;
	}

$conecta->close();

?>