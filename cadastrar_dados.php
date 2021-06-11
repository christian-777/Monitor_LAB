<?php
    include "conexao.php";
    $titulo=$_POST["titulo"];
    $dominio_ponte=$_POST["dominio_ponte"];
    $dominio_principal=$_POST["dominio_principal"];
    $extencao=$_POST["extencao"];
	$periodicidade=$_POST["periodicidade"];
	$disponibilidade=$_POST["disponibilidade"];

    $insert= "INSERT INTO dados_a_monitorar(
                                    titulo,
                                    dominio_ponte,
                                    dominio_principal,
									extencao_arquivo,
									periodicidade,
									disponibilidade
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
									?,
									?,
									?
                                )";

if($stmt = mysqli_prepare($con, $insert)) { 



    mysqli_stmt_bind_param($stmt, "ssssss", $titulo, $dominio_ponte, $dominio_principal,  $extencao, $periodicidade, $disponibilidade);
    
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>