<?php

@session_start();

if (isset($_SESSION['mes'])){
    $mes = $_SESSION['mes'];
    unset($_SESSION['mes']);
}else{
    $mes = 'No hay mes cargado';
    $_SESSION['mes'] = 'Febrero';
}//

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

        <h1> <?=$mes?> </h1>

</body>

</html>