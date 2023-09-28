<!DOCTYPE html>
<head>
    <title> Produtos da Espanha </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="pt.css">
    <script src="pt.js"></script>
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
  <!-- FIM DO MENU -->
  <!-- CORPO -->
  <!-- Linha 1-->
  <div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://lays.es/images/default-source/products/packshots/lays_bio_provenzal_white.jpg?sfvrsn=2" alt="Lay's Bio Provençal Sabor Tomate" 
      onclick="showPopup('Batatas fritas biológicas com sabor a tomate |  INGREDIENTES: Batata*, óleo de girassol*, base aromatizante Tomate provençal (especiarias (cebola seca*, colorau*, alho desidratado*, pimenta preta*), açúcar*, sal, aromas naturais, tomate em pó* (5%), acidulantes (ácido cítrico, ácido málico). * Ingredientes provenientes da agricultura biológica.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.es/images/default-source/default-album/lays_packs_389x389px_231811b1a381a669b494aaff03007b74c4.png?sfvrsn=0" alt="Lay's Stax Creme Azedo & Cebola" 
      onclick="showPopup('Produto aperitivo de batata aromatizado com creme de leite e cebola. | INGREDIENTES: Flocos de batata (49%), óleo de girassol, amido (trigo), xarope de glucose, aromatizante de natas ácidas e cebola (soro de leite em pó, sal, cebola e alho em pó, preparações aromatizantes e substâncias (que contenham leite), açúcar, natas ácidas em pó (leite), leite em pó desnatado, proteínas lácteas, regulador de acidez (carbonatos de magnésio), extrato de levedura em pó], emulsionante (mono e diglicéridos de ácidos gordos), óleo de colza.')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.es/images/default-source/products/packshots/layspolloasado_packshot_image_389x389.jpg?sfvrsn=2" alt="Lay's Frango Assado" 
      onclick="showPopup('Frango assado com sabor a batatas fritas |  INGREDIENTES: Batatas, óleos vegetais (milho e girassol em proporções variáveis), aromatizantes de frango assado, [sal, dextrose, extrato de levedura, cebola e alho em pó, cloreto de potássio, preparações e substâncias aromatizantes, matérias corantes (extrato de colorau), sálvia, antioxidante (extrato de rosmaninho)].')">
    </div>
    <div class="col-md-3">
      <img src="https://lays.es/images/default-source/products/popup-headers/laysbocabits_nav_dropdown_image_225x202-png.png?sfvrsn=0" alt="BOCABITS® DE LAY'S" 
      onclick="showPopup('Snack de trigo frito com sabor a carne |  INGREDIENTES: Farinha de trigo (74%), óleos vegetais (milho e girassol em proporções variáveis), aroma (extrato de levedura), sal, levedante (bicarbonato de sódio).')">
    </div>
  </div>
</div>

<div class="popup">
  <div class="popup-content">
    <span class="close" onclick="hidePopup()">&times;</span>
    <h2 id="popup-title"></h2>
    <p id="popup-description"></p>
  </div>
</div>


</body>
<footer class="footer">
  <nav class="menu">
    <ul>
      <li><a href="home.php"><img src="LOGO.png" width="80" height="80"> © 2020 Pipe's</a></li>
    </ul>
  </nav>
</footer>
</html>