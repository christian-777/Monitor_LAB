<?php
	session_start();
    include "conexao.php";
    $titulo=$_POST["titulo"];
    $dominio_ponte=$_POST["dominio_ponte"];
    $dominio_final=$_POST["dominio_final"];
    $extensao=$_POST["extensao"];
	$periodicidade=$_POST["periodicidade"];
	$file_content=file_get_contents($dominio_final);
	$codigo_rash=md5($file_content);
	$codificacao=mb_detect_encoding($file_contest, [ 'UTF-8', 'ISO-8859-1']);
	if($_SESSION["cargo"]==1){
		$cod_usuario=-1;
	}
	else{
		$cod_usuario=2;
	}

    $insert= "INSERT INTO monitoramento(
                                    titulo,
                                    dominio_ponte,
                                    dominio_final,
									extensao_arquivo,
									periodicidade,
									codigo_rash, 
									codificacao,
									cod_usuario
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
									?,
									?,
									?,
									?,
									?
                                )";

if($stmt = mysqli_prepare($con, $insert)) { 

	

    mysqli_stmt_bind_param($stmt, "ssssssss", $titulo, $dominio_ponte, $dominio_final,  $extensao, $periodicidade, $codigo_rash, $codificacao, $cod_usuario);
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>