<?php

require_once "Videojuego.php";

function juegoMasBarato(array $myWishlist): Videojuego {
    $resultado = $myWishlist[0];

    foreach ($myWishlist as $mygames) {
        if ($mygames->precio < $resultado->precio) {
            $resultado = $mygames;
        }
    }

    return $resultado;
}

function mismoGenero(array $myWishlist, Genero $genero):array {
    $resultado = [];

    foreach ($myWishlist as $game) {
        if ($game->genero === $genero) {
            $resultado[] = $game;
        }
    }

    return $resultado;
}
