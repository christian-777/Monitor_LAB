<?php
    include "conexao.php";
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $senha=md5($senha);
	if(!isset($_POST["cargo"])){
		$cargo=2;
	}
	else{
		$cargo=$_POST["cargo"];
	}

    $insert= "INSERT INTO usuario(
                                    nome,
                                    email,
                                    senha, 
									cargo
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?, 
									?
                                )";


if($stmt = mysqli_prepare($con, $insert)) { 

    mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $senha, $cargo);
    
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>