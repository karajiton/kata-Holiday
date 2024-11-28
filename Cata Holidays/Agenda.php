<?php
require_once('Evento.php');


class Agenda {
    private $eventos = [];

    public function agregarEvento(Evento $evento) {
        
        foreach ($this->eventos as $ev) {
            if ($ev->getFecha() == $evento->getFecha()) {
                echo "Error: Ya existe un evento en esa fecha. No se puede agregar {$evento->getNombre()}.\n";
                return;
            }
        }
        
        $this->eventos[] = $evento;
        echo "Evento '{$evento->getNombre()}' agregado con éxito.\n";
    }

   
    public function mostrarEventos() {
        if (empty($this->eventos)) {
            echo "No hay eventos programados.\n";
            return;
        }
        echo "Eventos programados:\n";
        foreach ($this->eventos as $evento) {
            echo "- {$evento->getNombre()} en la fecha {$evento->getFecha()}\n";
        }
    }

    
    public function realizarEvento($nombre) {
        foreach ($this->eventos as $evento) {
            if ($evento->getNombre() == $nombre) {
                if ($evento instanceof PlanVacacional) {
                    $evento->realizar();
                    return;
                } elseif ($evento instanceof EntregaItAcademy) {
                    $evento->entregar();
                    return;
                }
            }
        }
        echo "Error: No se encuentra un evento con ese nombre.\n";
    }

    
    public function anularEvento($nombre) {
        foreach ($this->eventos as $index => $evento) {
            if ($evento->getNombre() == $nombre) {
                if ($evento instanceof PlanVacacional) {
                    $evento->anular();
                }
                unset($this->eventos[$index]);
                echo "El evento '{$nombre}' ha sido anulado.\n";
                return;
            }
        }
        echo "Error: No se encuentra un evento con ese nombre.\n";
    }
}