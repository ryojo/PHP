<?php
include "index.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];



mysqli_query($link,"insert into tb_login(nome,email,senha) values ('$nome','$email','$senha')");
//definir a localização do formulário
header('location:formulario.php');
?>