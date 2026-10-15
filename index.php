<?php
require_once __DIR__ . '/vendor/autoload.php';

use View\ConsultaBus;
use View\VisualizarBus;
use Controller\ControladorBus;

$consulta = new ConsultaBus();
$consulta->consultar();

$vista = new VisualizarBus();
$controlador = new ControladorBus($vista);
$controlador->desarrollar();