<?php
namespace Models;

abstract class Bus
{
    protected string $placa;
    protected int $capacidadPasajeros;
    protected float $precioPasaje;
    protected int $pasajerosActuales = 0;
    protected int $totalPasajeros = 0;

    public function __construct(string $placa, int $capacidad, float $precio)
    {
        $this->placa = $placa;
        $this->capacidadPasajeros = $capacidad;
        $this->precioPasaje = $precio;
    }

    public function getPlaca(): string { return $this->placa; }
    public function getCapacidad(): int { return $this->capacidadPasajeros; }
    public function getPrecioPasaje(): float { return $this->precioPasaje; }
    public function getPasajerosActuales(): int { return $this->pasajerosActuales; }
    public function getPasajerosTotales(): int { return $this->totalPasajeros; }

    public function subirPasajeros(int $cantidad): void
    {
        if ($cantidad > 0) {
            $disponible = $this->capacidadPasajeros - $this->pasajerosActuales;
            $subenReales = min($cantidad, $disponible);
            $this->pasajerosActuales += $subenReales;
            $this->totalPasajeros += $subenReales;
        }
    }

    public function bajarPasajeros(int $cantidad): void
    {
        if ($cantidad > 0) {
            $bajanReales = min($cantidad, $this->pasajerosActuales);
            $this->pasajerosActuales -= $bajanReales;
        }
    }

    public function getDineroAcumulado(): float
    {
        return $this->totalPasajeros * $this->precioPasaje;
    }
}