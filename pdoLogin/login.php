<?php


require 'init.php';


$email = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

$PDO = db_connect();

$sql = "SELECT usuario, senha FROM usuarios WHERE usuario = :usuario AND senha = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($users);
echo 'aqt';
if (count($users) <= 0) {
    echo "Usuaddrio ou senha incorretos";
} else {
    echo "logado com sucesso";
}