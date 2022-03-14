<?php

include './Librerias/funciones.php';

function saludar(){
    echo "Hola Mundo";
}

function conRetorno($n){
    $resultado = "Hola ".$n;
    return $resultado;
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> My web model </title>

    <style>
        * {
            font-size: 105%;
        }

        h1 {
            font-size: 160%;
            color: blue;
        }
    </style>

</head>

<body>

    <header style="text-align: center;">
        <h1> MY WEB MODEL </h1>
        <h4> by Santiago Fagundez </h4>
    </header>

    <nav style="text-align: center;">
        <a href="https://facebook.com" target="_blank">Facebook</a> |
        <a href="https://instagram.com" target="_blank">Instagram</a> |
        <a href="https://store.steampowered.com" target="_blank">Steam</a> |
        <a href="https://box.com" target="_blank">Box</a>
    </nav>

    <div style="margin: 24px 20% 24px 0%;">
        <aside style="text-align: center; margin: 24px 20% 24px 4%;">
            <h4> ASIDE </h4>
            <p>The <code>&lt;aside&gt;</code> tag defines some content<br> aside from the content it is placed in.</p>
        </aside>
    </div>

    <h1><?=suma(12,8)?></h1>


</body>

</html>