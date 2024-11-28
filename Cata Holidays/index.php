<?php

require_once('Agenda.php');
require_once('Evento.php');
require_once('PlanVacacional.php');
require_once('EntregaIT.php');




$agenda = new Agenda();


$plan1 = new PlanVacacional("Visita al Parque Nacional", "2024-12-15", "Cultural");
$plan2 = new PlanVacacional("Partido de fútbol", "2024-12-16", "Deporte");


$entrega1 = new EntregaItAcademy("Entrega Sprint 1", "2024-12-15", Sprint::HTML_PHP, "https://github.com/usuario/sprint1", "Comentarios de la entrega.");
$entrega2 = new EntregaItAcademy("Entrega Sprint 2", "2024-12-17", Sprint::laravel, "https://github.com/usuario/sprint2", "Comentarios de la entrega.");


$agenda->agregarEvento($plan1);
$agenda->agregarEvento($plan2);
$agenda->agregarEvento($entrega1); // Esto debería mostrar un error porque ya existe un plan para esa fecha


$agenda->mostrarEventos();


$agenda->realizarEvento("Visita al Parque Nacional");
$agenda->anularEvento("Visita al Parque Nacional");


$agenda->agregarEvento($entrega2);
?>
