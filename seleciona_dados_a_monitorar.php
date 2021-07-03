<?php 
    header("Content-Type: application/json");
    include "conexao.php";

    if(!empty($_POST))
    {
        $id=$_POST["id"];
		
        $select="SELECT codigo_rash , dominio_final FROM monitoramento where id_monitoramento='$id'";
    }
    else{
        $select="SELECT id_monitoramento, titulo, dominio_ponte, dominio_final, extensao_arquivo, periodicidade, codigo_rash, codificacao FROM monitoramento";
    }
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
