<?php
namespace Models;

class BusMediano extends Bus
{
    public function __construct(string $placa)
    {
        parent::__construct($placa, 35, 2500.0);
    }
}