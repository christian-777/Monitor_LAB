<?php
    include "conexao.php";
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $senha=md5($senha);

    $insert= "INSERT INTO usuarios(
                                    nome,
                                    email,
                                    senha
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?
                                )";


if($stmt = mysqli_prepare($con, $insert)) { 

    mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha);
    
    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>