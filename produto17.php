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
    <link rel="stylesheet" href="css/compraprodutos.css">   
    <script>
        function goBack() {
            window.history.back()
        }
        </script>
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
    
    <main>
      
        <div class="divprodutos01">
            <!-- COLOCAR LINK DA IMAGEM DENTRO DE "SRC"
                 SEGUINDO O PADRÃO "img/produtos/NomeDaImagem.png" -->
        <div class="imagem"><img src="img/produtos/produto17.png" alt=""></div>

        <div class="texto01">

            <!-- COLOCAR O NOME DO PRODUTO-->
            <h2>Shampoo Avert Noxxi Control para Cães e Gatos - 200ml</h2>

            <!-- COLOCAR INFORMAÇÕES DO PROTUDO -->
            <h3>Se você é tutor de cachorro ou gato, sabe o quanto é importante manter a saúde da pele e dos pelinhos do seu mascote em dia, não é mesmo? Para te ajudar nessa tarefa tão essencial, a Avert lançou o Noxxi Control!
                Esse shampoo fantástico proporciona diversos benefícios para seu amigo de quatro patas. Confira algumas das vantagens do produto:
                - Possui ótima fórmula que permite boa penetração dos componentes na pele;
                - Controla a oleosidade sem ressecar a pele e o pelo do bichinho,
                - Feito com nanopartículas biodegradáveis que não agridem a natureza.
                      
            </h3>

            <!-- COLOCAR O PREÇO DO PRODUTO -->
            <h1 class="preco">R$86,28</h1>

        <div class="botaocompra">
            <a class="botao_comprar" href="login.php"><h1>Comprar produto</h1></a>
            
            <button class="botaovoltar" onclick="goBack()"><h1>Voltar</h1></button>
        </div>
        </div>
       
        

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