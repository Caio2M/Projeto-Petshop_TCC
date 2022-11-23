<?php

    if(!empty($_GET['id']))
    {

        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM Cliente WHERE id_Cliente=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $CPF = $user_data['CPF'];
                $dataNascimento = $user_data['dataNascimento'];
                $Email = $user_data['Email'];
                $senha = $user_data['Senha'];
            }

        }
        else{
            header('Location: sistema.php');
        }
    }
       
    

     /*   $result = mysqli_query($mysqli, "INSERT INTO Cliente(nome, CPF, dataNascimento, Email, senha)
        VALUES ('$nome', '$CPF', '$dataNascimento', '$Email', '$senha')");

    }*/

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
    <link rel="stylesheet" href="css/edit.css">
    
 
      
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

    <main style="background-image:none; background-color:#004646d1;" class="maincadastro">
        
<div class="margem">
        <form action="saveEdit.php" method="POST" style="    width: 50%;
    margin-left: auto;
    margin-right: auto;
}">
            <div class="tituloformulario">
        
            <a href="sistema.php" style="font-weight:bolder; color:white; background-color:#004646;float:left; padding:5px; border-radius:10px;">Voltar</a>
                <h2>Editar usuário</h2>
            </div>
            <div class="formulario">
          
            Nome de usuário: <input type="text" value="<?php echo $nome ?>" name="nome" placeholder="Digite seu usuário..." required/><br>
            CPF: <input type="number" value="<?php echo $CPF ?>" name="CPF"  max="99999999999" placeholder="000.000.000-00" required/><br>
            <p class="dataparagrafo">Data de nascimento:</p>
            <input type="date" value="<?php echo $dataNascimento ?>" name="dataNascimento" max="31/12/9999" min="01/01/0001"  placeholder="" required/><br>
            E-mail: <br><input type="email" value="<?php echo $Email ?>" name="Email" placeholder="exemplo@exemplo.com" required/><br>
            Senha: <br><input type="text" value="<?php echo $senha ?>" name="Senha"placeholder="Digite sua senha..."  minlength="8" required/><br>
            <input type="hidden" name="id_Cliente" value="<?php echo $id ?>">

            <input style=" background-color: #004646;
                            border-radius:10px;
                            border: none;
                            color: white;
                            padding: 16px 32px;
                            text-decoration: none;
                            margin: 4px 2px;
                            cursor: pointer;
                            width: 100%;
                            font-weight: bold;
                            margin-top: 10px;
                            text-align:center;" 
                        
             type="submit" value="Atualizar"  class="button" name="update" id="update"></input>
            
            
        </form>
        
    </div>
    </main>
    

    <script src="js/mobile-navbar.js"></script>
    
</body> 
</html>