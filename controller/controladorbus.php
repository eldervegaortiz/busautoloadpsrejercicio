<?php
namespace Controller;

use Models\BusPeq;
use Models\BusMediano;
use Models\BusGrande;
use View\VisualizarBus;

class ControladorBus
{
    private $vista;

    public function __construct(VisualizarBus $vista)
    {
        $this->vista = $vista;
    }

    public function desarrollar()
    {
        if (isset($_POST["procesar"])) {
            $placa = $_POST["placa"] ?? 'ABC-123';
            $tipo = $_POST["tipo"] ?? 'pequeno';

            if ($tipo === 'grande') {
                $bus = new BusGrande($placa);
            } elseif ($tipo === 'mediano') {
                $bus = new BusMediano($placa);
            } else {
                $bus = new BusPeq($placa);
            }

            // Parada 1
            $bus->subirPasajeros((int)($_POST["suben1"] ?? 0));

            // Parada 2
            $bus->bajarPasajeros((int)($_POST["bajan2"] ?? 0));
            $bus->subirPasajeros((int)($_POST["suben2"] ?? 0));

            // Parada 3
            $bus->bajarPasajeros((int)($_POST["bajan3"] ?? 0));
            $bus->subirPasajeros((int)($_POST["suben3"] ?? 0));

            // Parada 4
            $bus->bajarPasajeros((int)($_POST["bajan4"] ?? 0));
            $bus->subirPasajeros((int)($_POST["suben4"] ?? 0));

            $this->vista->mostrarResultado($bus);
        }
    }
}