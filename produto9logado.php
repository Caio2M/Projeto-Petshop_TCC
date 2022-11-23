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
        <div class="imagem"><img src="img/produtos/produto9.png" alt=""></div>

        <div class="texto01">

            <!-- COLOCAR O NOME DO PRODUTO-->
            <h2>Ração Pedigree Equilíbrio Natural para Cães Adultos de Raças Médias e Grandes - 1kg  </h2>

            <!-- COLOCAR INFORMAÇÕES DO PROTUDO -->
            <h3>A alimentação dos nossos bichinhos de estimação deve ser de muita qualidade, até mesmo durante a fase adulta. Por mais que não estejam mais em processo de crescimento, os cãezinhos precisam se manter fortes e saudáveis e, para isso, nada melhor do que a ração Pedigree raças médias e grandes.
                Essa ração Premium Pedigree Equilíbrio Natural tem a função de cuidar do organismo do seu melhor amigo, e faz isso de forma eficaz. Ela oferece:
                - Grãos integrais e polpa de beterraba, que proporcionam um balanço adequado de fibra no organismo do cão;
                - Pedaços suculentos em sabor carne e frango;
                - A quantidade ideal de proteínas, carboidratos e vitaminas para nutrir seu pet. 
                                           
            </h3>

            <!-- COLOCAR O PREÇO DO PRODUTO -->
            <h1 class="preco">R$29,99</h1>

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