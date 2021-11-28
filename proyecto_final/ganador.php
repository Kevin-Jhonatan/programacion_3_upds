<?php
session_name('juego');
session_start();

if ($_SESSION['PJ1']['ganador'] == true && $_SESSION['PJ2']['ganador'] == false) {
    $ganador = "<h1 style='color: rgb(155, 15, 132)'>Gano!!!!  el Jugador 1 :-) </h1>";
} elseif ($_SESSION['PJ1']['ganador'] == false && $_SESSION['PJ2']['ganador'] == true) {
    $ganador = "<h1 style='color: rgb(255, 51, 0)'>Gano!!! el jugador 2 :-) </h1>";
} elseif ($_SESSION['PJ1']['ganador'] == false && $_SESSION['PJ2']['ganador'] == false) {
    $ganador = "<h1 style='color: green'>Lo siento pero es un Empate ;-) </h1>";
}
session_destroy();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="icon/icon.svg" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <title>Tabla de Resultados</title>
    </head>
    <body>
        <h1>
            <?php
                echo $ganador;
            ?>
        </h1>
        <a href="index.php">
            <br><br><center><input class="btn btn-primary" type="button" value="Volver a intentarlo"></center>
        </a>
    </body>
</html>
