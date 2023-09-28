<!DOCTYPE html>
<head>
    <title> Produtos dos Estados Unidos </title>
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
      <img src="https://cdn.shopify.com/s/files/1/2777/6944/products/LAYS_Potato_Chips_Cheddar_Sour_Cream_12x6.5_oz_a_580x.png?v=1521646103" width="243" height="389" alt="Lay's Cheddar e Creme Azedo" 
      onclick="showPopup('Batatas fritas com sabor a queijo cheddar e creme azedo |  INGREDIENTES: Batatas, Óleo Vegetal (Canola, Milho, Soja e/ou Óleo de Girassol) e Tempero de Sal, Cheddar e Creme de Leite (Maltodextrina [Feito de Milho], Soro de Leite, Sal, Queijo Cheddar [Leite, Culturas de Queijo, Sal, Enzimas], Cebola em Pó, Óleo de Milho, Aroma Natural, Óleo de Canola, Buttermilk, Creme de Leite [Creme de Cultura, Leite Desnatado], Manteiga [creme, sal], caseinato de sódio, extrato de levedura, lactose, ácido cítrico, leite desnatado, queijo azul [leite, culturas de queijo, sal, enzimas], ácido láctico, Extratos de páprica, alho em pó, soro de leite, isolado proteico, concentrado proteico do leite, extratos de amaretto e óleo de girassol). Contém ingredientes lácteos.')">
    </div>
    <div class="col-md-3">
      <img src="https://www.kroger.com/product/images/large/front/0002840003599" width="350" height="389" alt="Lay's de Caranguejo Chesapeake" 
      onclick="showPopup('Tudo começa com batatas cultivadas na fazenda, cozidas e temperadas com perfeição. Cada chip é perfeitamente temperado com especiarias de caranguejo inspiradas na Baía de Chesapeake. | INGREDIENTES:Batatas, Óleo Vegetal (Óleo de Girassol, Milho e/ou Canola), Tempero de Especiarias de Caranguejo Chesapeake (Especiarias, Sal, Maltodextrina [Feito de Milho], Dextrose, Aromas Naturais, Açúcar, Cebola em Pó, Ácido Cítrico, Óleo de Girassol, Extrato de Levedura e Extratos de Páprica).')">
    </div>
    <div class="col-md-3">
      <img src="https://cdn.shopify.com/s/files/1/0520/3152/0924/products/white-PhotoRoom_79_-PhotoRoom_70_-PhotoRoom-2023-03-25T124023.548_1024x1024.png?v=1679748029" width="380" height="389"alt="Lay's Pickle" 
      onclick="showPopup('Batatas fritas com sabor a pickles |  INGREDIENTES: Batatas, óleo vegetal (óleo de girassol, milho e/ou canola), tempero em picles de endro (maltodextrina [à base de milho], aromas naturais, sal, vinagre, alho em pó, extrato de levedura e extratos de especiarias [incluindo endro]).')">
    </div>
    <div class="col-md-3">
      <img src="https://target.scene7.com/is/image/Target/GUEST_bbe70005-2e20-4da5-baa1-1a8fdf544aa1?wid=488&hei=488&fmt=pjpeg" width="350"height="389"alt="Lay's Limão" 
      onclick="showPopup('Batatas fritas com sabor a limão |  INGREDIENTES: batatas, óleo vegetal (óleo de girassol, milho e/ou canola), tempero de limão (maltodextrina [feita de milho], sal, ácido cítrico, açúcar e sabores naturais [incluindo sabor natural de limão]).')">
    </div>
  </div>
</div>
<!-- Linha 2-->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="https://phorcys-static.ewg.org/kwikee/028/400/200/684.jpg"width="350" height="389" alt="Lay's Barbecue & Mel" 
      onclick="showPopup('Adicionamos o sabor doce do mel e o toque picante do molho BBQ. | INGREDIENTES: Batatas, Óleo Vegetal (Canola, Milho, Óleo de Soja e/ou Girassol.), Açúcar, Sal, Dextrose, Torula, Levedura, Cebola em Pó, Especiarias, Paprika, Tomate em Pó, Maltodextrina (à base de milho), açúcar mascavo, frutose, extrato de levedura, melaço, aromas naturais, amido de milho, mel, goma, acácia, Extratos de páprica, cor de caramelo, alho em pó, e ácido cítrico.')">
    </div>
    <div class="col-md-3">
      <img src="https://prezunic.vtexassets.com/arquivos/ids/156954/63ac2af620a0ed320dd3509e.png?v=638078243801130000"width="410" height="389" alt="Lay's Creme de Leite & Cebola" 
      onclick="showPopup('Adicionamos o toque de creme de leite e cebola suave. | INGREDIENTES: Batatas, Óleo Vegetal (Óleo de Girassol, Milho e/ou Canola), Creme de Leite e Tempero de Cebola (Leite Desnatado, Sal, Maltodextrina, Cebola em Pó, Soro de Leite, Creme Azedo [Creme de Cultura, Leite Desnatado], Óleo de Canola, Salsa, Sabor Natural, Lactose, Óleo de Girassol, Ácido Cítrico, Concentrado de Proteína de Soro de Leite e Leitelho).')">
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