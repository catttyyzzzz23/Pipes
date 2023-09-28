<!DOCTYPE html>

<head>
  <title> Home </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="home.css">
  <script src="https://kit.fontawesome.com/7333a19f9e.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="LOGO.png">


</head>

<body>
  <?php
    session_start();
  ?>
  <!-- MENU -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="LOGO.png" width="80" height="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pt.php">Portugal</a></li>
              <li><a class="dropdown-item" href="usa.php">Estados Unidos</a></li>
              <li><a class="dropdown-item" href="es.php">Espanha</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historia.php">História</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactos.php">Contato</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              $username = $_SESSION['username'];
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"';
              echo 'data-bs-toggle="dropdown" aria-expanded="false">' . $username . '</a>';
              echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
              echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
              echo '</ul></li>';
            }
            else{
              echo '<li class="nav-item">';
              echo '<a id="loginBtn" href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>';
              echo '</li>';
            }
          ?>
  
        </ul>
      </div>
    </div>
  </nav>
  <!-- FIM MENU -->
  <!-- CORPO DO SITE -->
  <div class="container">
    <div>
      <img class="imagem-texto" src="originais.jpg">
    </div>
    <div class="texto">
      <p class="titulo">CONHECE TODA A NOSSA<br> GAMA EM PORTUGAL </p><br>
      <p class="corpo">Nos bons momentos, há<br>coisas que estão sempre<br> presentes, como as batatas<br> Lay’s®:
        batatas fritas<br>crocantes e saborosas, ideais<br> para partilhar em qualquer<br> ocasião com os teus.</p>
        <a href="pt.php" class="botao">Saber mais</a>
    </div>
    <div class="imagem-1">
      <img src="https://lays.pt/images/default-source/accueil-page/homecontent_bowlcrips.jpg?sfvrsn=2">
    </div>
  </div>

  <div class="container2">
    <div class="texto">
      <p class="titulo">CONHECE TODA A HISTÓRIA<br> DE LAY'S </p><br>
      <p class="corpo">Lay’s é uma marca de batatas fritas e <br>snacks fundada no ano de 1938 em<br> Nashville,
        Tennessee. O lançamento de<br> Lay’s em Portugal deu-se em 1998,<br> convertendo-se na marca líder de<br>
        mercado.</p>
        <a href="historia.php" class="botao">Saber mais</a>
    </div>
    <div>
      <img class="imagem2" src="batatas.jpg">
    </div>
    <div class="texto">
      <p class="titulo">DESCUBRA AS LAYS<br> GOURMET </p><br>
      <p class="corpo">Excelência em sabor e sensação<br> crocante, com um corte mais grosso e<br> um lento processo de
        elaboração.</p>
        <a href="pt.php" class="botao">Saber mais</a>
    </div>
    <div>
      <img class="imagem2"
        src="https://lays.pt/images/default-source/products/popup-headers/laysgourmet-cortefino_packshot_image_389x389-amarelo.jpg?sfvrsn=0">
    </div>
  </div>




  <!-- FIM CORPO DO SITE-->
</body>
<footer class="footer">
  <nav class="menu">
    <ul>
      <li><a href="home.php"><img src="LOGO.png" width="80" height="80"> © 2020 Pipe's</a></li>
    </ul>
  </nav>
</footer>


</html>