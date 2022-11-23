<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empório Pet</title>
    <link rel="icon" type="image/x-icon" href="img/logo_tcc.png">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/home.css">

    
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="index.php"><img src="img/logonova.png"  alt=""> </a>
            
            <div class="mobile-menu" style="background-color: teal;">
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

    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">

      <img src="img/home1.jpg" style="width:100%; ">
   
    </div>
  
    <div class="mySlides fade">
      
      <img src="img/home2.jpg" style="width:100%; ">
  
    </div>
  
    <div class="mySlides fade">
      
      <img src="img/home3.jpg" style="width:100%;">
      
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">

  </div>
        

      <div class="maintipos">
          <h2 style="font-family:Andale Mono, monospace; font-size:30px;">Na Empório Pet temos:</h2>

          <div class="cardtipos">

            <a href="higiene.php">
              <img src="img/icone1.png" alt="">
              <p>Higiene</p>
            </a>

            <a href="conforto.php">
              <img src="img/icone2.png" alt="">
              <p>Conforto</p>
            </a>

            <a href="racoes.php">
              <img src="img/icone3.png" alt="">
              <p>Ração</p>
            </a>
              
          </div>

      </div>

      <div class="divprodutos">
        <h2 class="texto-h2-divprodutos" style="font-family:Andale Mono, monospace; font-size:30px;">Alguns exemplares:</h2>
      <div class="produtos1">

        

        <a href="produto1.php">
        <div class="card">
             
            <img src="img/produtos/produto1.png" alt="">
            <h3>Ração Golden Gatos Adultos Carne <br> 10,1kg</h3>
            <h2>R$ 139,41</h2>
                
        </div>
        <a href="produto7.php">
          <div class="card">
              <img src="img/produtos/produto7.png" alt="">
              <h3>Ração Pedigree Nutrição Essencial Carne para Cães Adultos - 15kg</h3>
              <h2> R$ 162,99</h2>

          </div></a>

          <a href="produto16.php">
            <div class="card">
                <img src="img/produtos/produto16.png" alt="">
                <h3>Clorexsyn Shampoo Antisséptico para Cachorro e Gatos - 200ml                     </h3>
                <h2>R$ 48,90</h2>

            </div></a>

            <a href="produto23.php">
              <div class="card">
                  <img src="img/produtos/produto23.png" alt="">
                  <h3>Cama Fábrica Pet Retangular Marinho para Cães e Gatos         </h3>
                  <h2>                R$ 85,99</h2>
  
              </div></a>
             

        </div>
        <div  class="link-maisprodutos">
        <a href="produtos.php">
          <div class="maisprodutos">
            <p>Ver mais produtos</p>
          </div>
        </a>
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