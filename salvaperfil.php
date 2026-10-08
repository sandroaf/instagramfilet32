<?php
    session_start();
    define("arq","\instagram.txt");

    if (isset($_POST["fperfil"])) {
        $destino = dirname("__FILE__").arq;
        
        if ($arquivo = fopen($destino,"a")) {
            $_SESSION["msg"] = "Salvo ".$_POST["fperfil"]." em ";
            $_SESSION["msg"] .= fwrite($arquivo,str_replace("@","",$_POST["fperfil"])."\n");
            $_SESSION["msg"] .= " bytes de ".$destino;
        } else {
            $_SESSION["msg"] = "ERRO! Não por possível abri o arquivo. ".$destino;
        }
    }
    header("Location: index.php");
?>