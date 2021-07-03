<?php
	include "conexao.php";
	print_r($_POST);
	$id_monitoramento=$_POST["id_monitoramento"];
	$titulo=$_POST["titulo"];
	$dominio_final=$_POST["dominio_final"];
	$extensao=$_POST["extensao"];
	$data=@date('d/m/Y - H:i:s');
	$conteudo=file_get_contents($dominio_final);
	$codificacao=mb_detect_encoding($conteudo, [ 'UTF-8', 'ISO-8859-1']);
	
	$novo_codigo=md5($conteudo);
	
    $update= "UPDATE monitoramento SET
									codigo_rash='$novo_codigo',
									codificacao='$codificacao'
                                 WHERE 
									id_monitoramento = '$id_monitoramento'
                                ";
	
	 mysqli_query($con, $update)or die(mysqli_error($con));
	
	$insert= "INSERT INTO versoes(
                                    cod_monitoramento,
                                    titulo,
                                    dominio_final,
									extensao_arquivo,
									data,
									codificacao,
									conteudo
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

    mysqli_stmt_bind_param($stmt, "sssssss", $id_monitoramento, $titulo, $dominio_final,  $extensao, $data, $codificacao, $conteudo);
    mysqli_stmt_execute($stmt) or die(print_r($stmt));
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);
?>