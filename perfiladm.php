<?php include('conexao.php');
 

 $sql_code = "SELECT * FROM Cliente WHERE status_Cliente = '1';";
 $sql_query = $mysqli->query($sql_code) or die("Falha na execução do códgo SQL:" . $mysqli->error);

        $usuario = $sql_query->fetch_assoc();
 
        $nome = $usuario['nome'];
        $cpf = $usuario['CPF'];
        $datanasc = $usuario['dataNascimento'];
        $email = $usuario['Email'];

        if(isset($_POST["botao"])){
            $sql_code = "UPDATE Cliente SET status_cliente = '0' WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do códgo SQL:" . $mysqli->error);

            header("Location: index.php");
        }  
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
    <link rel="stylesheet" href="css/perfil.css">

 
      
</head>
<body>
    <header>
        <nav  style="background-color:#004646;">
            <a class="logo" href="perfiladm.php"><img src="img/logonova.png"  alt=""> </a>
            
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
    


    <main>

    <div class="perfil">
            <div class="perfil2">
                <div class="alinhar">
                  
            <h1>Perfil</h1>  <div class="al">
            <h3 style="letter-spacing: 4;
                       font-weight: bolder;">Dados Pessoais:</h3>
            <h4><?php  echo $nome?> <br>
            CPF: <?php  echo $cpf?>           <br>
            Email: <?php  echo $email?> <br>
            Data de Nasc.: <?php  echo $datanasc?>

        </h4>
        <form action="" method="post">
     <input type="submit" value="Desconectar" name="botao">
     <a class="edit" href="sistema.php">Editar Usuários</a>
        </form>  
           
        </div>
            
        </div>
         </div>
        </div>
        
        <div class="imagem">
            <img src="img/imagemfundoperfil.jpg" alt="">
        </div>
        

    </main>

   
    
    <footer>

      <div class="textinfooter">
  
          <h2>Como podemos <br> ajudar você?</h2>
            <p>Conheça mais sobre nossa empresa e tenha o melhor atendimento do mercado pet.</p>
            
      </div>
      <div class="divatendimento">
        <p><img src="img/logo_tcc.png" alt=""></p>
         <h3>Atendimento</h3><br>
         <p>atendimentoEmporioPet@gmail.com</p><br>
         <a href="perfiladm.php">Contato</a>
         
  
      </div>
  
      </footer>
    <script src="js/mobile-navbar.js"></script>
    
</body>
</php>