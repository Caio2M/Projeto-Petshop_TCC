<?php

    if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM Cliente WHERE id_Cliente=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
           $sqlDelete = "DELETE FROM Cliente WHERE id_Cliente=$id";
           $resultDelete = $mysqli->query($sqlDelete);


        }
    }
    header('Location: sistema.php');


?>