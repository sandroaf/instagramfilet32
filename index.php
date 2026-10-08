<?php 
    session_start();
    if (!isset($_SESSION["msg"])) {
        $_SESSION["msg"] = "";        
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Files T32</title>
</head>
<body>
    <main>
        <h1>Instagram Files T32</h1>
        <br>
        <h1>Salvar @ do instagram</h1>
        <br>
        <form action="salvaperfil.php" method="post">
            <label for="fperfil">Informe o Instagram: <strong>@</strong></label>
            <input type="text" name="fperfil" required>
            <br>
            <br>
            <button type="submit">Adicionar</button>
            <br>
            <p><?=  $_SESSION["msg"] ?></p>
        </form>
    </main>
    <br>
    <a href="lerperfis.php">Listar Perfis Salvos</a>
</body>
</html>