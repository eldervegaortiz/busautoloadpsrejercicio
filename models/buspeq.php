<?php
namespace Models;

class BusPeq extends Bus
{
    public function __construct(string $placa)
    {
        parent::__construct($placa, 20, 2000.0);
    }
}