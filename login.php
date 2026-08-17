<?php
session_start();
include "conexao.php";

$email = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $_SESSION['email'] = $email; // <-- MUDEI AQUI
    header("Location: index2.php");
    exit;
} else {
    echo "Usuário ou senha inválidos! <a href='index.php'>Voltar</a>";
}
?>