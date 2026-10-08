<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Perfis</title>
</head>

<body>
    <h1>Perfis do Instagram</h1>
    <?php
    $arq = dirname(__file__) . "/instagram.txt";
    if (file_exists($arq)) {
        if ($arquivo = fopen($arq, "r")) {
            while (! feof($arquivo)) {
                $perfil = fgets($arquivo);
                echo "<a href='https://instagram.com/$perfil' target='_blank'>$perfil</a><br>";
            }

            fclose($arquivo);
        } else {
            echo "ERRO! Problemas ao abrir o arquivo " . $arq;
        }
    } else {
        echo "Nenhum perfil encontrado.<br>";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>

</html>