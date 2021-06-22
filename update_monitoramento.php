<?php
	include "conexao.php";
	$id_monitoramento=$_POST["id_monitoramento"];
	$titulo=$_POST["titulo"];
	$dominio_final=$_POST["dominio_final"];
	$extensao=$_POST["extensao"];
	$data=@date('d/m/Y');
	$conteudo=file_get_contents($dominio_final);
	
	$novo_codigo=md5($conteudo);
	
    $update= "UPDATE monitoramento SET
									codigo_rash='$novo_codigo'
                                 WHERE 
									id_monitoramento = '$id_monitoramento'
                                ";
	
	echo mysqli_query($con, $update)or die(mysqli_error($con));
	
	$insert= "INSERT INTO versoes(
                                    cod_monitoramento,
                                    titulo,
                                    dominio_final,
									extensao_arquivo,
									data,
									conteudo
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
									?,
									?,
									?
                                )";

if($stmt = mysqli_prepare($con, $insert)) { 

    mysqli_stmt_bind_param($stmt, "ssssss", $id_monitoramento, $titulo, $dominio_final,  $extensao, $data, $conteudo);
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);
?>