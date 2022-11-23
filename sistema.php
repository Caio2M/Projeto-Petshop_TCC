<?php

    session_start();
    include_once('conexao.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and  (!isset($_SESSION['senha']) == true))
    {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
       
}

    //$logado = $_SESSION['email'];

    $sql = "SELECT * FROM Cliente ORDER BY id_Cliente DESC";

    $result = $mysqli->query($sql);

    //print_r($result);

?>


<!DOCTYPE php>
<php lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empório Pet</title>
    <link rel="icon" type="image/x-icon" href="img/logo_tcc.png">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/sistema.css">
    <link rel="stylesheet" href="css/perfil.css">
 
      
</head>
<body>
    <header>
        <nav  style="background-color:#004646;">
            <a class="logo" href="indexlogado.php"><img src="img/logonova.png"  alt=""> </a>
            
            <div class="mobile-menu" style="background-color: teal;">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            
            <ul class="nav-list">
                <a href="perfiladm.php"><li style="color:yellow;">Conta Administradora</li></a>
          
          </ul>
        </nav>
  
    </header>

    <div>
    <table class="table">
            <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">...</th>
                    </tr>
            </thead>
            <tbody>

                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id_Cliente']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['CPF']."</td>";
                        echo "<td>".$user_data['dataNascimento']."</td>";
                        echo "<td>".$user_data['Email']."</td>";
                        echo "<td>".$user_data['Senha']."</td>";
                        echo "<td>
                                    <a class='editar' href='edit.php?id=$user_data[id_Cliente]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16' style=' color: black;
                                                                                                                                                                            background-color: rgb(245 188 104);
                                                                                                                                                                            padding: 4px;
                                                                                                                                                                            border-radius: 5px;'>
                                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                        </svg>
                                    </a>
                                    <a class='delete' href='delete.php?id=$user_data[id_Cliente]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16' style=' color: black;
                                                                                                                                                                                  background-color: rgb(255 0 0);
                                                                                                                                                                                  padding: 4px;
                                                                                                                                                                                  border-radius: 5px;'>
                                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                        </svg>
                                    </a>    
                        </td>";
                        echo "<tr>";
                    }
                ?>

            </tbody>
</table>
    </div>
    
</body>
</html>