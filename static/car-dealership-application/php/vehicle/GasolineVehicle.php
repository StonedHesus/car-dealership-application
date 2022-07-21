<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_types = 1);

class GasolineVehicle extends Vehicle
{

    public function __toString() : string {

        return "Gasoline vehicle - brand: $this->brand"
            . ", colour: $this->colour"
            . ", horse power: $this->horse_power"
            . ", space: $this->space" . PHP_EOL;
    }
}