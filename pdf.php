<?php	
require_once("conexao.php");

session_start();
    if(!isset($_SESSION["user_portal"])){
        header("location:index.php");
        //break;
    } // fim do teste

    $cpf_usuario = $_SESSION["user_portal"];

	$html =  '<table border=1 width =100%>';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td>ID: </td>';
	$html .= '<td>Nome: </td>';
	$html .= '<td>Email: </td>';
	$html .= '<td>CPF:  </td>';
	$html .= '<td>Endereço: </td>';
	$html .= '</tr>';
	$html .= '</thead>';
	
	$result_usuario  = "SELECT * FROM usuario ";
	$result_usuario .= "WHERE CPF = {$cpf_usuario} ";
	$resultado_usuario = mysqli_query($conecta, $result_usuario);
	
	if( !$resultado_usuario){
		die("Falha no banco de dados PDF");
	}else{

		$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			$html .='<tbody>';
			$html .= '<tr><td>'.$row_usuario['usuarioID'] . '</td>';
			$html .= '<td>'.$row_usuario['nome'] . '</td>';
			$html .= '<td>'.$row_usuario['email'] . '</td>';
			$html .= '<td>'.$row_usuario['CPF'] . '</td>';
			$html .= '<td>'.$row_usuario['endereco'] . '</td></tr>';		
			$html .= '</tbody>';

		$html .= '</table>';
	}	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">DGLab - Resultado do Exame</h1>

			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"resultado_DGLab.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>