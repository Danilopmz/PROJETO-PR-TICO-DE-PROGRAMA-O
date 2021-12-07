<?php 

include "conexao.php";


$var=$_GET["del"];

$sql = "delete from produtos where idproduto ={$var}";
$res = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);



if($linhas == 1 ){
    echo "Produto excluído com sucesso!";


}else{
    echo "Erro ao realizar a exclusão do produto!";

}

mysqli_close($conexao);


?>

