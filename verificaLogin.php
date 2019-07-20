<?php
ini_set("display_errors", 1);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  mysql_connect('localhost', 'root', '');
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $query = "select usuario, senha fro usuario where usuario='$usuario' and senha= '$senha'";
  $result = mysql_query($query);
  $rows = mysql_fetch_array($result);
  if ($rows) {
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
   <form action="vericaLogin.php" method="POST">
    Usuario:<br>
     <input type="text" name="usuario"><br> 
    Senha:<br> 
     <input type="password" name="senha">
     <input type="submit" value="logar">
   </form>
  </body>
</html>