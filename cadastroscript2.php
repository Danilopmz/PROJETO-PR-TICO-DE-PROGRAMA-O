<?php

include "conexao.php";

$categoriap=$_POST["categoria"];
$nomeproduto=$_POST["nomeproduto"];
$valor=$_POST["valor"];
$descricao=$_POST["descricao"];


$sql = "insert into produtos (categoria, nomeproduto, valor, descricao) values ('{$categoriap}','{$nomeproduto}','{$valor}','{$descricao}')";

$res=mysqli_query($conexao, $sql);


$linhas = mysqli_affected_rows($conexao);


  

if($linhas == 1 ){
    echo "Cadastro de produto realizado com sucesso!";

}else{
    echo "Erro ao realizar o cadastro do produto";
    

}

mysqli_close($conexao);


?>