<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fabiana Pereira - Algoritmos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
    <img src="minha-foto.jpeg" alt="Foto da Fabiana" class="profile-pic">
    <h1 id="username">FABIANA </h1>
    <p id="semestre">PRIMEIRO SEMESTRE</p>
    <h2 id="titulo">DIFICULDADES EM ALGORITMOS</h2>
    <div id="container_link"></div>
    
    <div class="social-icons">
      <a href="https://instagram.com/seuusuario" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com/seucanal" target="_blank"><i class="fab fa-youtube"></i></a>
      <a href="https://github.com/seuusuario" target="_blank"><i class="fab fa-github"></i></a>
      <a href="#" target="_blank"><i class="fas fa-file-alt"></i></a>
      <a href="#" target="_blank"><i class="fas fa-graduation-cap"></i></a>
      <a href="mailto:seuemail@gmail.com"><i class="fas fa-envelope"></i></a>
      <br><br>
      <a href="sair.php" style="color:#ff4d4d;"><i class="fas fa-sign-out-alt"></i> SAIR</a>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>