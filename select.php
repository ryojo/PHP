<?php
include "index.php";
//trazer todos os dados na tabela
$consulta = $_POST['consulta'];
$sql = mysqli_query($link, "select * from tb_login where nome like '%$consulta%'");


$vetor = mysqli_fetch_array($sql);
$id = $vetor['id'];
$nome = $vetor['nome'];
$email = $vetor['email'];
$senha= $vetor['senha'];



//echo "id: $id<br>";
echo "Nome: $nome<br>";
//echo "email: $email<br>";
//echo "senha: $senha<hr>";





//while($vetor = mysqli_fetch_array($sql)){
///$id = $vetor['id'];
///$nome = $vetor['nome'];
///$email = $vetor['email'];
//$senha = $vetor['senha'];

//echo "id: $id<br>";
echo "Nome: $nome<br>";
//echo "email: $email<br>";
//echo "senha: $senha<hr>";

//}





?>