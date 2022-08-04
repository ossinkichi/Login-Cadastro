<?php
    #Conectando com o arquivo de conexão do banco de dados
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <br>
    <form method="post">
        <input type="text" placeholder="email" name="email" require>
        <br>
        <input type="password" placeholder="senha" name="senha" require>
        <br>
        <a href="cadastro.html">Se cadastrar</a>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>

<?php

?>