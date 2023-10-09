<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PIEDRA PAPEL TIJERA</title>
        <link rel="stylesheet" type="text/css" href="estilosPPT.css">
    </head>
<body>
    <div class="juego">
<h1>¡PIEDRA, PAPEL O TIJERA!</h1>


<?php
 
$opciones = array(
    'Piedra' => array("Piedra" => 0, "Papel" => 2, "Tijera" => 1),
    'Papel' => array("Piedra" => 1, "Papel" => 0, "Tijera" => 2),
    'Tijera' => array("Piedra" => 2, "Papel" => 1, "Tijera" => 0),
);

$ordenador1 = array_rand($opciones);
$ordenador2 = array_rand($opciones);

define('Piedra',  '<span class="icono">&#x1F91C;</span>');
define('Piedra2',  '<span class="icono">&#x1F91B;</span>');
define('Tijera',  '<span class="icono">&#x1F596;</span>');
define('Papel',    '<span class="icono">&#x1F91A;</span>');



echo '<div id="jugada"><p>Has sacado: '.$ordenador1.'</p></div>';
if ($ordenador1 == 'Piedra') {
    echo Piedra;
} elseif ($ordenador1 == 'Tijera') {
    echo Tijera;
} else {
    echo Papel;
}
echo "El jugador dos ha sacado: ".$ordenador2;

if ($ordenador2 == 'Piedra') {
    echo Piedra2;
} elseif ($ordenador2 == 'Tijera') {
    echo Tijera;
} else {

    echo Papel;
}

foreach ($opciones as $opcion1 => $opcion2) {

    if ($ordenador1 == $opcion1 && $opcion2[$ordenador2] == 0) {
        echo '<div id="resultado"><h2>EMPATE</h2></div>';
        
    }
    if ($ordenador1 == $opcion1 && $opcion2[$ordenador2] == 1) {
        echo '<div id="resultado"><h2>HAS GANADO</h2></div>';
    }
    if ($ordenador1 == $opcion1 && $opcion2[$ordenador2] == 2) {
        echo '<div id="resultado"> <h2>HAS PERDIDO</h2></div>';
    }
}

?>
</div>
</body>

</html>
