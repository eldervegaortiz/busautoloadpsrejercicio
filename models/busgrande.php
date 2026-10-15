<?php
namespace Models;

class BusGrande extends Bus
{
    public function __construct(string $placa)
    {
        parent::__construct($placa, 50, 3000.0);
    }
}