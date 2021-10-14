<?php

	$host ="us-mm-auto-sfo-04-bh.cleardb.net:3306";//"localhost";
	$bd = "heroku_a3e9e3861168425";
	$usuario ="bd64414655a596";
	$senha = "543db129";

	$con = mysqli_connect($host,$usuario,$senha,$bd) or die("Erro ao abrir a conexão com o banco de dados.");

	mysqli_set_charset($con, "utf8");
?>