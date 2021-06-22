<?php
    include "conexao.php";
    $id=$_POST["id"];
	$select="SELECT id_monitoramento, titulo, dominio_final, extensao_arquivo FROM monitoramento WHERE id_monitoramento='$id'";
	
	$res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
	
	$id_monitoramento=$resultado["id_monitoramento"];
	$titulo=$resultado["titulo"];
	$dominio_final=$resultado["dominio_final"];
	$extensao=$resultado["extensao_arquivo"];
	$data=date("d-m-Y");
	$conteudo=file_get_contents($dominio_final);
	
	$novo_codigo=md5($conteudo);
	
    $update= "UPDATE monitoramento SET
									codigo_rash='$novo_codigo'
                                 WHERE 
									id_monitoramento = '$id_monitoramento'
                                )";
	mysqli_query($con, $update) or die(mysqli_error($con));
	
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