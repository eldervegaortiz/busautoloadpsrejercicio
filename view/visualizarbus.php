<?php
namespace View;

use Models\Bus;

class VisualizarBus
{
    public function mostrarResultado(Bus $bus)
    {
        echo "<h2>== RESULTADO FINAL ==</h2>";
        echo "La placa es: " . $bus->getPlaca() . "<br>";
        echo "La capacidad es: " . $bus->getCapacidad() . "<br>";
        echo "El precio es: " . $bus->getPrecioPasaje() . "<br>";
        echo "El dinero acumulado es: " . $bus->getDineroAcumulado() . "<br>";
        echo "La cantidad total de pasajeros que se subió fue: " . $bus->getPasajerosTotales() . "<br>";
        echo "Los pasajeros actuales son: " . $bus->getPasajerosActuales() . "<br>";
    }
}