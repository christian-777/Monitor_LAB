<?php
	header("Content-Type: application/json");
    include "conexao.php";
    $id=1;//$_POST["id"];
	$select="SELECT cod_monitoramento, titulo, dominio_final, extensao_arquivo, data, conteudo FROM versoes WHERE cod_monitoramento='$id'";
	
	$res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
	echo json_encode($resultado);
?>