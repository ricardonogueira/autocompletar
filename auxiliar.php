<?php

	include("conexao.php");
	
	$parametro = $_POST['parametro'];
	
	$tabela = "<table border='1'>";
	
	if($parametro != "") {
		
		$SQL = "SELECT * FROM tb_pessoa WHERE nome LIKE '$parametro%'";

		$resultado = mysqli_query($conexao, $SQL);			
	
		while(($registro = mysqli_fetch_assoc($resultado)) != NULL) {
		
			$tabela .= "<tr><td>".$registro['id']."</td>";
			$tabela .= "<td>".$registro['nome'] . "</td>";
			$tabela .= "<td>".$registro['idade']. "</td></tr>";
		}
	
		$tabela .= "</table>";
	}
	
	mysqli_close($conexao);
	
	echo $tabela;
?>