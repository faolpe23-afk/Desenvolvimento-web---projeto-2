<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        .caixa-login { text-align:center; padding-top:50px; }
        .caixa-login img { width:150px; height:150px; border-radius:50%; object-fit:cover; margin-bottom:20px; } /* MUDEI SÓ AQUI */
        input, button { padding:10px; margin:5px; border-radius:5px; border:1px solid #ccc; }
        button { background:#007bff; color:white; border:none; cursor:pointer; }
    </style>
</head>
<body>
    <div class="caixa-login">
        <img src="minha-foto.jpeg" alt="Logo"> <!-- SUA FOTO-->
        <h2>Login</h2>
        <form action="login.php" method="POST">
            Login: <input type="text" name="usuario" required> <br><br>
            Senha: <input type="password" name="senha" required> <br><br>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>