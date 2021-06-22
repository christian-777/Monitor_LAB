<?php
	header("Content-Type: application/json");
    include "conexao.php";
    $id=$_POST["id"];
	$select="SELECT id_monitoramento, titulo, dominio_final, extensao_arquivo FROM monitoramento WHERE id_monitoramento='$id'";
	
	$res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
	echo json_encode($resultado);
?>