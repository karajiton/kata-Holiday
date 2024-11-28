<?php



class Evento {
    protected $nombre;
    protected $fecha;

    public function __construct($nombre, $fecha) {
        $this->nombre = $nombre;
        $this->fecha = $fecha;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha() {
        return $this->fecha;
    }
}


