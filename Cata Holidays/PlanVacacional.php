<?php

class PlanVacacional extends Evento {
    private $tipo;

    public function __construct($nombre, $fecha, $tipo) {
        parent::__construct($nombre, $fecha);
        $this->tipo = $tipo;
    }

    public function realizar() {
        echo "¡Realizando el plan vacacional: {$this->nombre}!\n";
    }

    public function anular() {
        echo "El plan vacacional: {$this->nombre} ha sido anulado.\n";
    }

    public function getTipo() {
        return $this->tipo;
    }
}