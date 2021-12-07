<?php

include "conexao.php";

$nomec=$_POST["nome"];
$email=$_POST["email"];
$login=$_POST["usuario"];
$senha=$_POST["senha"];


$sql = "insert into cadastro (nome, email, login, senha) values ('{$nomec}','{$email}','{$login}','{$senha}')";
$res=mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);


  

if($linhas == 1 ){
    echo "Cadastro realizado com sucesso!";

}else{
    echo "Erro ao realizar o cadastro";

}

mysqli_close($conexao);


?>