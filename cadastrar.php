<?php

    if(isset($_POST['submit']))
    {
   //print_r('Nome: ' . $_POST['nome']);

   include_once "conexao.php";

   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $datanasc = $_POST['datanasc'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result= mysqli_query($con, "INSERT INTO Usuarios (Nome, cpf, data_nasc, email, senhas)
   VALUES('$nome', '$cpf', '$datanasc', '$email', '$senha'");

    }

?>
<!-- nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['tel']));
$datanasc = mysqli_real_escape_string($conexao, trim($_POST['datanasc']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha']))); -->