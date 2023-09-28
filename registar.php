<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image/png" href="LOGO.png">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registar</title>
</head>
<body>
<form method="post" action="registrar.php">
  <h2>Registrar</h2>
  <label>Utilizador:</label>
  <input type="username" id="username"name="username" placeholder="Utilizador"  required>
  <label>Senha:</label>
  <input type="password" id="password" name="password" placeholder="Senha"required>
  <button type="submit" name="registar">Registar</button>
  <p>Já tem uma conta? <a href="">Faça login aqui</a></p>
</form>

</body>
<?php
extract($_POST);
if(isset($registar))
{
    $ligax =mysqli_connect("localhost", "root");
    if(!$ligax)
    {
        echo "<p> Erro: Falha de ligação.";
        exit;
    }
 
    mysqli_select_db($ligax,"pipes");
    $insere ="select * from users where username='$username' AND password='$password' or username='$username';";
    $result =mysqli_query($ligax,$insere);
    $nregistos = mysqli_num_rows($result);

    if($nregistos >= 1)
    {
         echo"<script>alert('Conta já existente')</script>";
         header('location:home.php');
    }
    else{
         $insere ="insert into users (username,password) values ('$username','$password');";
         $result =mysqli_query($ligax,$insere);
         echo"<script>alert('Conta criada com sucesso')</script>";
         header('location:home.php');
    }
}
?>
</html>