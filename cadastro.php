<?php include('conexao.php');
 if (isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0 ){
            echo "Preencha seu email";

    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";

    } else if(strlen($_POST['cpf']) == 0){
        echo "Preencha seu CPF";

    } else if(strlen($_POST['datanasc']) == 0){
        echo "Preencha sua Data de nascimento";

    }  else if(strlen($_POST['nome']) == 0){
        echo "Preencha seu nome";

    }  else{
        
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $datanasc = $mysqli->real_escape_string($_POST['datanasc']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        

        $sql_code = "INSERT INTO Cliente (senha, nome, email, cpf, dataNascimento, status_Cliente) VALUES ('$senha', '$nome', '$email','$cpf','$datanasc', '1');";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do códgo SQL:" . $mysqli->error);
    
        header("Location: indexlogado.php");
 }
}
 ?>
 <!DOCTYPE html>
<html lang="en"
        xmlns:th="http://thymeleaf.org"
        xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empório Pet</title>
    <link rel="icon" type="image/x-icon" href="img/logo_tcc.png">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/estiloCadastro.css">   

</head>
<body>
    <header>
        <nav>
            <a class="logo" href="index.php"><img src="img/logonova.png" alt=""> </a>
            
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            
            <ul class="nav-list">

<li><a href="index.php">Inicio</a></li>
<li><a href="sobrenos.php">Sobre nós</a></li>
<li><a href="produtos.php">Produtos</a></li>

<li><a href="login.php">Login</a></li>

</ul>
        </nav>
        
    </header>
    

    <main class="maincadastro">
        
<div class="margem">
        <form action="" method="POST">
            <div class="tituloformulario">
                <h2>Criar Conta</h2>
                <h3 style="color: rgba(0, 0, 0, 0.459);">Preencha todos os campos para realizar o cadastro</h3>
            </div>
            <div class="formulario">
          
            *Nome de usuário: <input type="text" value="" name="nome" placeholder="Digite seu usuário..." required/><br>
            *CPF: <input type="number" value="" name="cpf"  max="99999999999" placeholder="000.000.000-00" required/><br>
            <div class="di"><p class="telefoneparagrafo"> Telefone: </p><p class="dataparagrafo">*Data de nascimento:</p>
            <input type="tel" value="" name="tel" placeholder="00 00000-0000" maxlength="15"/>
            <input type="date" value="" name="datanasc" max="31/12/9999" min="01/01/0001"  placeholder="" required/><br></div>
            *E-mail: <br><input type="email" value="" name="email" placeholder="exemplo@exemplo.com" required/><br>
            *Senha: <br><input type="password" value="" name="senha"placeholder="Digite sua senha..."  minlength="8" required/>

            <button style=" background-color: teal;
                            border: none;
                            color: white;
                            padding: 16px 32px;
                            text-decoration: none;
                            margin: 4px 2px;
                            cursor: pointer;
                            width: 100%;
                            font-weight: bold;
                            margin-top: 10px;" 
             type="submit" class="button" name="Enviar">Cadastrar</button>
            
            </div>
            <p class="fazerlogin"><a style="color: rgb(255, 255, 255);
                font-weight: bold; border-radius: 10px; padding: 5px;"
                 href="login.php">Fazer login</a> </p>
            </div>
              
        </form>
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
           <a href="contato.php">Contato</a>
           
    
        </div>
    
        </footer>
    <script src="js/mobile-navbar.js"></script>
    
</body> 
</html>