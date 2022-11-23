<?php

    include_once('conexao.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id_Cliente'];
        $nome = $_POST['nome'];
        $CPF = $_POST['CPF'];
        $dataNascimento = $_POST['dataNascimento'];
        $Email = $_POST['Email'];
        $senha = $_POST['Senha'];

        $sqlUpdate = "UPDATE Cliente SET nome = '$nome',CPF = '$CPF',dataNascimento = '$dataNascimento',Email = '$Email',Senha = '$senha'
        WHERE id_Cliente='$id'";

        $result = $mysqli->query($sqlUpdate);


    }

    header('Location: sistema.php');

?>