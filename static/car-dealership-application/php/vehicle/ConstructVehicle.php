<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_types = 1);

interface ConstructVehicle{

    // The prototype for an abstract construct method which can be used to create any type of motorisation.
    public function createVehicle(string $brand, string $colour, int $horse_power, float $space) : Vehicle;
}