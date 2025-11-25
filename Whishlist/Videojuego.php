<?php 
require_once 'Genero.php';
class Videojuego {
    public string $nombre;
    public string $publisher;
    public string $empresaDesarrolladora;
    public float $precio;
    public Genero $genero;

    public function __construct(
        string $nombre,
        string $publisher,
        string $empresaDesarrolladora,
        float $precio,
        Genero $genero
    ) {
        $this->nombre = $nombre;
        $this->publisher = $publisher;
        $this->empresaDesarrolladora = $empresaDesarrolladora;
        $this->precio = $precio;
        $this->genero = $genero;
    }

    public function __toString(): string {
        return "{$this->nombre} | {$this->publisher} | {$this->empresaDesarrolladora} | {$this->precio}€ | {$this->genero->name}";
    }
}
?>