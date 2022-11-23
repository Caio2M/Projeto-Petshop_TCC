<?php

include('conexao.php');
 if (isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0 ){
    

    } else if(strlen($_POST['senha']) == 0){
       

    } else{
        
   
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM Cliente WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do códgo SQL:" . $mysqli->error);

        


        $quantidade = $sql_query->num_rows;
        

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

        if(isset($_SESSION)){
               session_start();
        }
        $sql_query =  $mysqli->query("UPDATE Cliente SET status_cliente = '1' WHERE email = '$email'") or die("Falha na execução do códgo SQL:" . $mysqli->error);
        $_SESSION['id'] = $usuario['id_usuario'];
        $_SESSION['nome'] = $usuario['nome'];
        
        header("Location: indexlogado.php");

        }else{
            $alert = "<script> alert('Email ou senha inválidos!')</script>";
            echo $alert;
        }
    
    }

        if($email == 'adm@gmail.com' && $senha == 'adm123456'){
            
            header("Location: perfiladm.php");
        }
        
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empório Pet</title>
    <link rel="icon" type="image/x-icon" href="img/logo_tcc.png">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/estiloCadastro.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="index.php"><img src="img/logonova.png"  alt=""> </a>
            
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
    

    <main>

        <div class="margem">
            <form name="formLogin" action="" id="formLogin" method="POST" >
                <div class="tituloformulario">
                    <h2 class="palavralogin">Login</h2>
                   
                </div>
                <div class="formulario">
                
                E-mail: <br><input type="email" value="" id="txtEmail"  name="email" placeholder="Digite seu e-mail..." required/><br>
                Senha: <br><input type="password" value="" id="txtSenha" name="senha" placeholder="Digite sua senha..." required />
    
               <!-- <input type="button" id="btnLogin" onclick="" value="Enviar" placeholder="enviar"></input> -->
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
                                                type="submit">Enviar</button>    
            </div> 
                <p class="fazercadastro"><a style="color: rgb(255, 255, 255); border-radius: 10px; padding: 5px; font-weight: bold;" href="cadastro.php">Criar conta</a></p>
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
<script>
function appRunLogin(){
    let formdata = new FormData($("form[name='formLogin']")[0]);

    let msg = ''

    if(document.getElementById('txtEmail').value == ""){
        msg = msg + ' - Email\n';
    }
    if(document.getElementById('txtSenha').value == ""){
        msg = msg + '- Senha\n';
    }
    if(msg != ''){
        alert('== PARA PROSSEGUIR PREENCHA OS SEGUINTES CAMPOS ==\n'+msg);
    }else{
        document.getElementById('btnLogin').disabled = true;
        $.ajax({
            url:"security/appRuntime.php",
            type:"post",
            data: formdata,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(retorno){
                console.log(retorno);
                if(retorno.logged == true){
                    let r = confirm('Login Realizado com Sucesso, Você será redirecionado a pagina principal');
                    if(r){
                        setTimeout(function(){
                                window.location.href='indexlogado.php';
                            },500); 	
                    }
                }else{
                    alert('Nenhum Registro foi encontrado, Tente Novamente com outras credenciais');
                }
                document.getElementById('btnLogin').disabled = false;
            },
            error: function(retorno){
                
            }
        });
    }
}
</script>
    
</body>
</html>