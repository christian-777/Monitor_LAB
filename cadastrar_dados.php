<?php
	session_start();
    include "conexao.php";
    $titulo=$_POST["titulo"];
    $dominio_ponte=$_POST["dominio_ponte"];
    $dominio_principal=$_POST["dominio_principal"];
    $extensao=$_POST["extensao"];
	$periodicidade=$_POST["periodicidade"];
	$disponibilidade=$_POST["disponibilidade"];
	if($_SESSION["cargo"]==1){
		$cod_usuario=-1;
	}
	else{
		$cod_usuario=2;
	}

echo"$titulo, $dominio_ponte, $dominio_principal,  $extensao, $periodicidade, $disponibilidade, $cod_usuario";
    $insert= "INSERT INTO monitoramento(
                                    titulo,
                                    dominio_ponte,
                                    dominio_principal,
									extensao_arquivo,
									periodicidade,
									disponibilidade, 
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

	

    mysqli_stmt_bind_param($stmt, "sssssss", $titulo, $dominio_ponte, $dominio_principal,  $extensao, $periodicidade, $disponibilidade, $cod_usuario);
    echo"foi2";
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>