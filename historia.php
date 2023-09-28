<!DOCTYPE html>

<head>
  <title> História da Lay's </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="historia.css">
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
  <div class="box">
      <h1>História das batatas Lay's</h1>
      <p>As batatas Lay's foram criadas em 1932 por Herman Lay, que começou a vender as batatas fritas em uma pastelaria em Nashville, Tennessee. O negócio cresceu rapidamente e em 1961 a empresa foi vendida para a Frito Company, que mais tarde se fundiu com a PepsiCo.</p>
      <img src="https://web.harrison-chamber.com/external/wcpages/wcwebcontent/webcontentpage.aspx?contentid=482" alt="Batatas Lay's" class="imagem">
      <p>Atualmente, as batatas Lay's são vendidas em todo o mundo em uma grande variedade de sabores. A empresa também lançou várias campanhas publicitárias de sucesso, incluindo o slogan "Betcha can't eat just one" ("Aposto que tu não consegues comer só uma").</p>
      <img src="https://i.redd.it/a0eqkba73cu81.png" alt="Sabores das batatas Lay's" class="imagem">
      <p>Se és fã das batatas Lay's, com certeza já experimentou alguns dos sabores mais populares, como Original, Cheddar & Sour Cream, Barbecue e Sour Cream & Onion. Mas você sabia que a empresa também lançou sabores mais exóticos em diferentes partes do mundo, como Wasabi Ginger no Japão e Picanha na Argentina?</p>
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