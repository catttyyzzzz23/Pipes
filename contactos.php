<!DOCTYPE html>

<head>
  <title> Contactos Pipe's </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="contactos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/7333a19f9e.js" crossorigin="anonymous"></script>
  <script src="contactos.js"></script>
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
	<div class="container">
		<h2>Selecione uma opção:</h2>
		<label>
			<input type="radio" name="opcao" value="opcao1" onclick="mostrarFormulario('formulario1')"> Fazer uma pergunta ou comentário
		</label><br>
		<label>
			<input type="radio" name="opcao" value="opcao2" onclick="mostrarFormulario('formulario2')"> Donativo
		</label><br>
		<label>
			<input type="radio" name="opcao" value="opcao3" onclick="mostrarFormulario('formulario3')"> Pedidos de informação dos produtos
		</label><br>
		
		<form id="formulario1" class="formulario">
			<h3>Informações sobre si</h3>
			<label>
				Nome:
				<input type="text" name="nome">
			</label><br>
      <label>
				Apelido:
				<input type="text" name="apelido">
			</label><br>
			<label>
				E-mail:
				<input type="email" name="email">
			</label><br>
      <label>
				Telemovel:
				<input type="number" name="telefone">
			</label><br>
      <h3>O que gostava de nos dizer ou perguntar</h3>
      <label>
      Escreva os seus comentários aqui:*<br>
				<textarea id="descricao" name="descricao"></textarea>
			</label><br>
      <input type="submit" value="Enviar">

		</form>
		
		<form id="formulario2" class="formulario">
    <h3>Informações sobre si</h3>
			<label>
				Nome:
				<input type="text" name="nome">
			</label><br>
      <label>
				Apelido:
				<input type="text" name="apelido">
			</label><br>
			<label>
				E-mail:
				<input type="email" name="email">
			</label><br>
      <label>
				Telemovel:
				<input type="number" name="telefone">
			</label><br>
      <h3>O que gostava de nos dizer ou perguntar</h3>
      <label>
      Escreva os seus comentários aqui:*<br>
				<textarea id="descricao" name="descricao"></textarea>
			</label><br>
      <input type="submit" value="Enviar">
      </form>
		
		<form id="formulario3" class="formulario">
    <h3>Informações sobre si</h3>
			<label>
				Nome:
				<input type="text" name="nome">
			</label><br>
      <label>
				Apelido:
				<input type="text" name="apelido">
			</label><br>
			<label>
				E-mail:
				<input type="email" name="email">
			</label><br>
      <label>
				Telemovel:
				<input type="number" name="telefone">
			</label><br>
      <h3 align="center">Pedidos de informação dos produtos</h3>
      <p>Dispomos de uma lista de alérgenos para o ajudar a encontrar os produtos que melhor correspondem às suas necessidades</p>
      <p>As infomações dos produtos estão disponiveis nas listas de dietas em baixo.</p> 
      <p>Por favor, selecione a lista que gostaria de receber e enviaremos pelo e-mail.</p>
      <label for="opcao">Escolha uma opção:</label>
      <select id="opcao" name="opcao">
        <option value="opcao1">Por favor selecione</option>
        <option value="opcao2">Informação geral de alérgenos</option>
        <option value="opcao3">Opções saudáveis ou veggies</option>
        <option value="opcao4">Opções gourmet </option>
      </select><br>
      <input type="submit" value="Enviar">
      
		</form>
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