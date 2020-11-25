<?php

	$conexao = mysqli_connect("localhost", "ricardo", "teste123", "teste");

	if(!$conexao) {
		echo "Falha na conexao com o banco de dados";
	}
?>