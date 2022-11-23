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
        <div class="imagem"><img src="img/produtos/produto23.png" alt=""></div>

        <div class="texto01">

            <!-- COLOCAR O NOME DO PRODUTO-->
            <h2>Cama Fábrica Pet Retangular Marinho para Cães e Gatos</h2>

            <!-- COLOCAR INFORMAÇÕES DO PROTUDO -->
            <h3>- Indicada para cães e gatos;
                - Especialmente elaborada para trazer maior aconchego ao seu pet;
                - Cama retangular;
                - Possui enchimento em fibra siliconada;
                - Não retém a umidade;
                - Super confortável, possibilita horas tranquilas de descanso para o seu amigo peludo;
                - Disponível nos tamanhos P, M, G e GG.                           
            </h3>

            <!-- COLOCAR O PREÇO DO PRODUTO -->
            <h1 class="preco">R$85,99</h1>

        <div class="botaocompra">
            <a class="botao_comprar" href=""><h1>Comprar produto</h1></a>
            
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