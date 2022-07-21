<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_types = 1);

class ConstructGasolineVehicle implements ConstructVehicle
{

    public function createVehicle(string $brand, string $colour, int $horse_power, float $space): Vehicle
    {

       return new GasolineVehicle($brand, $colour, $horse_power, $space);
    }
}