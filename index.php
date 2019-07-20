<?php
ini_set("display_errors", 1);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $link = mysqli_connect("127.0.0.1", "root", "", "teste");
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
 $query = "select usuario, senha from usuarios where usuario='$usuario' and senha= '$senha'";
 $result = mysqli_query($link, $query);
 $row = mysqli_fetch_array($result);
 if ($row) {
   echo "Logado com sucesso";
 } else {
  echo "Login inválido!"; 
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Título da página</title>
  <meta charset="utf-8">
</head>
<body>
 Teste sql injection
 <form action="index.php" method="POST">
  Usuario:<br>
  <input type="text" name="usuario"><br> 
  Senha:<br> 
  <input type="text" name="senha">
  <input type="submit" value="logar">
</form>
</body>
</html>