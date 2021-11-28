<?php
    session_name('juego');
    session_start();
    if (isset($_GET['reiniciar'])){
        session_destroy();
        header('Location: index.php', true, 302);
    }
    if ((isset($_SESSION['PJ1']['turno']) == false) && (isset($_SESSION['PJ2']['turno']) == false)){
        /* Si es true empieza el jugador 1 si el false no le toca o no es su turno */
        $_SESSION['PJ1']['turno'] = true;
        $_SESSION['PJ1']['ganador'] = false;
        /* De igual forma controlamos si es su turno */
        $_SESSION['PJ2']['turno'] = false;
        $_SESSION['PJ2']['ganador'] = false;
    }
    if (isset($_SESSION['posiciones']) == false) {
        $_SESSION['posiciones'] = array (
            0 => 'ø',
            1 => 'ø',
            2 => 'ø',
            3 => 'ø',
            4 => 'ø',
            5 => 'ø',
            6 => 'ø',
            7 => 'ø',
            8 => 'ø'
        );
    }
    for ($i=0; $i<=8; $i++) {
        if (isset($_GET[$i])) {
            if ($_SESSION['PJ1']['turno'] == true) {
                $_SESSION['posiciones'][$i] = 'X';
                $_SESSION['PJ1']['turno'] = false;
                $_SESSION['PJ2']['turno'] = true;
            } elseif ($_SESSION['PJ2']['turno'] == true) {
                $_SESSION['posiciones'][$i] = 'O';
                $_SESSION['PJ1']['turno'] = true;
                $_SESSION['PJ2']['turno'] = false;
            }
        }
    }
    /* En esta parte nos sirve para comprobar si hay algun ganador comprobando si las verticales, horizontales y diagonales
    tienen un mismo valor, en ese caso gana el jugador correspondiente al valor. */

    /* Controlamos las posiciones horizontales fila 1 para la el jugador X */
    if (($_SESSION['posiciones'][0] === 'X') && ($_SESSION['posiciones'][1] === 'X') && ($_SESSION['posiciones'][2] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones horizontales fila 1 para la el jugador O */
    } elseif (($_SESSION['posiciones'][0] === 'O') && ($_SESSION['posiciones'][1] === 'O') && ($_SESSION['posiciones'][2] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones horizontales fila 2 para la el jugador X */
    } elseif (($_SESSION['posiciones'][3] === 'X') && ($_SESSION['posiciones'][4] === 'X') && ($_SESSION['posiciones'][5] === 'X')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones horizontales fila 2 para la el jugador O */
    } elseif (($_SESSION['posiciones'][3] === 'O') && ($_SESSION['posiciones'][4] === 'O') && ($_SESSION['posiciones'][5] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones horizontales fila 3 para la el jugador X */
    } elseif (($_SESSION['posiciones'][6] === 'X') && ($_SESSION['posiciones'][7] === 'X') && ($_SESSION['posiciones'][8] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones horizontales fila 3 para la el jugador O */
    } elseif (($_SESSION['posiciones'][6] === 'O') && ($_SESSION['posiciones'][7] === 'O') && ($_SESSION['posiciones'][8] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 1 para jugador X */
    } elseif (($_SESSION['posiciones'][0] === 'X') && ($_SESSION['posiciones'][3] === 'X') && ($_SESSION['posiciones'][6] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 1 para jugador O */
    } elseif (($_SESSION['posiciones'][0] === 'O') && ($_SESSION['posiciones'][3] === 'O') && ($_SESSION['posiciones'][6] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 2 para jugador X */
    } elseif (($_SESSION['posiciones'][1] === 'X') && ($_SESSION['posiciones'][4] === 'X') && ($_SESSION['posiciones'][7] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 2 para jugador O */
    } elseif (($_SESSION['posiciones'][1] === 'O') && ($_SESSION['posiciones'][4] === 'O') && ($_SESSION['posiciones'][7] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 3 para jugador X */
    } elseif (($_SESSION['posiciones'][2] === 'X') && ($_SESSION['posiciones'][5] === 'X') && ($_SESSION['posiciones'][8] === 'X')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlalos las posiciones verticales columna 3 para jugador O */
    } elseif (($_SESSION['posiciones'][2] === 'O') && ($_SESSION['posiciones'][5] === 'O') && ($_SESSION['posiciones'][8] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones diagonales diagonal 1 para jugador X */
    } elseif (($_SESSION['posiciones'][0] === 'X') && ($_SESSION['posiciones'][4] === 'X') && ($_SESSION['posiciones'][8] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones diagonales diagonal 1 para jugador O */
    } elseif (($_SESSION['posiciones'][0] === 'O') && ($_SESSION['posiciones'][4] === 'O') && ($_SESSION['posiciones'][8] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones diagonales diagonal 2 para jugador X */
    } elseif (($_SESSION['posiciones'][2] === 'X') && ($_SESSION['posiciones'][4] === 'X') && ($_SESSION['posiciones'][6] === 'X')) {
        $_SESSION['PJ1']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Controlamos las posiciones diagonales diagonal 2 para jugador O */
    } elseif (($_SESSION['posiciones'][2] === 'O') && ($_SESSION['posiciones'][4] === 'O') && ($_SESSION['posiciones'][6] === 'O')) {
        $_SESSION['PJ2']['ganador'] = true;
        header('Location: ganador.php', true, 302);
    /* Si al tener llenas todas las casillas no hay ninguna combinacion ganadora se
     producira un empate y finalizara el juego. */
    } else {
        $completo = true;
        //En este for comprobamos si hay alguna posicion sin marcar con X u O
        for ($i=0; $i<9; $i++) {
            if ($_SESSION['posiciones'][$i] === 'ø') {
                $completo = false;
            }
        }
        if ($completo){
            header('Location: ganador.php', true, 302);
        }
    }
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Proyecto Final | UPDS</title>
</head>
<body>
<h1 class="title">PROYECTO FINAL PROGRAMACIÓN 3 | UPDS</h1>
<div class="container">
    <?php
        /* Aquí controlamos si es turno del jugador1 o jugador2 */
        if ($_SESSION['PJ1']['turno'] == true){
            echo '<h1 class="pj1">Jugador 1:</h1>';
        }
        else{
            echo '<h1 class="pj2">Jugador 2: </h1>';
        }
    ?>
    <div class="form-control">
        <div id="casillas">
            <form method="get" action="index.php">
                <?php
                    $j = 0;
                    for ($i=0; $i<=8; $i++) {
                        if (isset($_SESSION['posiciones']) && $_SESSION['posiciones'][$i] === 'ø') {
                            echo '<input class="casilla" name="'.$i.'" type="submit" value="*">';
                        } elseif ($_SESSION['posiciones'][$i] === 'X') {
                            echo '<input class="casilla azul" disabled="true" name="'.$i.'" type="submit" value="'.$_SESSION['posiciones'][$i].'">';
                        } elseif ($_SESSION['posiciones'][$i] === 'O') {
                            echo '<input class="casilla rojo" disabled="true" name="'.$i.'" type="submit" value="'.$_SESSION['posiciones'][$i].'">';
                        }
                        $j++;
                        if ($j == 3) {
                            echo '<br>';
                            $j = 0;
                        }
                    }
                ?>
                <br><input class="btn btn-primary" name="reiniciar" type="submit" value="Reiniciar Partida">
            </form>
        </div>
    </div>
    <h3>Creado por:</h3>
    <h1 style='color: green'>Kevin Jhonatan Mamani Mollo | Ingeniería de Sistemas</h1>
</div>
</body>
</html>