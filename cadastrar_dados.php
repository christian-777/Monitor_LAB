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
									cod_usuario
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
									?,
									?,
									?,
									?
                                )";

if($stmt = mysqli_prepare($con, $insert)) { 

	

    mysqli_stmt_bind_param($stmt, "sssssss", $titulo, $dominio_ponte, $dominio_final,  $extensao, $periodicidade, $codigo_rash, $cod_usuario);
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>