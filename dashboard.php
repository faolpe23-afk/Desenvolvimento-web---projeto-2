<?php
session_start();

// Se não estiver logado, volta pro login
if(!isset($_SESSION['id'])){
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo(a), <?php echo $_SESSION['nome']; ?>!</h1>
        <p>Login feito com sucesso ✅</p>
        <br>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>