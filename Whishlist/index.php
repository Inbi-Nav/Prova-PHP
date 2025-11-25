<?php

require_once "Genero.php";
require_once "Videojuego.php";
require_once "funciones.php";

$myWishlist = [
    new Videojuego("VJ_1", "publisher_1", "empresa_1", 300, Genero::RPG),
    new Videojuego("VJ_2", "publisher_2", "empresa_2", 275, Genero::Accion),
    new Videojuego("VJ_3", "publisher_3", "empresa_3", 157, Genero::Terror),
    new Videojuego("VJ_4", "publisher_4", "empresa_4", 348, Genero::RPG),
];

echo "<h2>Mi Wishlist:</h2>";
foreach ($myWishlist as $game) {
    echo $game . "<br>";
}

echo "<h2>Juegos RPG:</h2>";
$rpgs = mismoGenero($myWishlist, Genero::RPG);
foreach ($rpgs as $g) {
    echo $g . "<br>";
}

echo "<h2>Juego más barato:</h2>";
echo juegoMasBarato($myWishlist);
