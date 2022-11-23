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
            <a class="logo" href="indexlogado.php"><img src="img/logonova.png" alt=""> </a>
            
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            
            <ul class="nav-list">

                <li><a href="indexlogado.php">Inicio</a></li>
                <li><a href="sobrenoslogado.php">Sobre nós</a></li>
                <li><a href="produtoslogado.php">Produtos</a></li>
                <li><a href="perfil.php">Perfil</a></li>

            </ul>
        </nav>
        
    </header>
    
    <main>
      
        <div class="divprodutos01">
            <!-- COLOCAR LINK DA IMAGEM DENTRO DE "SRC"
                 SEGUINDO O PADRÃO "img/produtos/NomeDaImagem.png" -->
        <div class="imagem"><img src="img/produtos/produto3.png" alt=""></div>

        <div class="texto01">

            <!-- COLOCAR O NOME DO PRODUTO-->
            <h2>Ração Seca Premier Pet Golden Salmão para Gatos Adultos Castrados - 10,1kg </h2>

            <!-- COLOCAR INFORMAÇÕES DO PROTUDO -->
            <h3>Procedimento cada vez mais recomendado pelos médicos veterinários, a castração promove inúmeros benefícios, mas também alterações fisiológicas que exigem alguns cuidados extras com a dieta do seu gato. 
                Especialmente formulada para atender às necessidades dos gatos castrados, a Ração Seca PremieR Pet Golden Salmão para Gatos Adultos Castrados auxilia na prevenção da obesidade e no cuidado com o trato urinário, garantindo uma nutrição ótima e saudável.
                
                
            </h3>

            <!-- COLOCAR O PREÇO DO PRODUTO -->
            <h1 class="preco">R$159,21</h1>

        <div class="botaocompra">
            <a class="botao_comprar"  href=""><h1>Comprar produto</h1></a>
            
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
           <a href="contatologado.php">Contato</a>
           
    
        </div>
    
        </footer>
    <script src="js/mobile-navbar.js"></script>
    
</body> 
</html>