<?php
session_start();

// Se não estiver logado, volta pro login
if(!isset($_SESSION['id'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="caixa-login">
        <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>
        <p>Seu email: <?php echo $_SESSION['email']; ?></p>
        <p>Você está logado. Projeto Nota 10 ✅</p>
        <a href="sair.php">Sair</a>  <!-- LINHA ARRUMADA AQUI -->
    </div>
</body>
</html>