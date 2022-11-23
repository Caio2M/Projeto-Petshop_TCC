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
        <div class="imagem"><img src="img/produtos/produto10.png" alt=""></div>

        <div class="texto01">

            <!-- COLOCAR O NOME DO PRODUTO-->
            <h2>Ração Pedigree Para Cães Filhotes Raças Pequenas - 2,7kg </h2>

            <!-- COLOCAR INFORMAÇÕES DO PROTUDO -->
            <h3>Quem tem um filhotinho em casa sabe o quanto é importante escolher um alimento alinhado ao porte do peludo. Assim, ele tem um desenvolvimento mais saudável e feliz. Por isso, apresentamos a Ração da Pedigree para filhote de raças médias e grandes!
                Com a qualidade da marca, a Ração Pedigree Vital Pro filhotes apresenta muitas vantagens para seu cachorro, como:
                - Vitaminas e minerais em sua fórmula;
                - Auxilia na saúde bucal e reduz a formação de tártaro,
                - Contém cálcio, para fortalecer o crescimento saudável.                 
                                           
            </h3>

            <!-- COLOCAR O PREÇO DO PRODUTO -->
            <h1 class="preco">R$55,59</h1>

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