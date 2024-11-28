<?php
require_once('Sprint.php');
class EntregaItAcademy extends Evento {
    private Sprint $sprint;
    private $linkGithub;
    private $comentarios;

    public function __construct($nombre, $fecha, Sprint $sprint, $linkGithub, $comentarios) {
        parent::__construct($nombre, $fecha);
        $this->sprint = $sprint;
        $this->linkGithub = $linkGithub;
        $this->comentarios = $comentarios;
    }

    public function entregar() {
        echo "¡Entrega realizada: {$this->nombre}!\n";
    }

    public function reentregar() {
        echo "¡Reentrega realizada: {$this->nombre}!\n";
    }

    public function getEntregable() {
        return $this->sprint;
    }

    public function getLinkGithub() {
        return $this->linkGithub;
    }

    public function getComentarios() {
        return $this->comentarios;
    }
}