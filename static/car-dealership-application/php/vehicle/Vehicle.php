<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_type = 1);

// Define the namespace of the current class.
#namespace ;

abstract class Vehicle{

    // Attributes/fields of the class.
    protected string $brand; // A string object/literal which indicates the brand of the vehicle.

    protected string $colour; // A string object/literal which indicates the colour of the vehicle.

    protected int $horse_power; // An integer value which indicates the power of the engine, measured in HP.

    protected float $space; // A float numerical value which indicates the amount of space existent within the vehicle.

    // Constructor of the class.
    public function __construct(string $brand, string $colour, int $horse_power, float $space){

        // Make sure that the user/client provided input which goes in accordance with the specification and which does
        // not break the laws of reality.
        assert($brand !== "");
        assert($colour !== "");
        assert($horse_power > 0);
        assert($space > 0);

        $this->brand        = $brand;
        $this->colour       = $colour;
        $this->horse_power  = $horse_power;
        $this->space        = $space;
    }

    // Public methods of the class.
    public abstract function __toString() : string;
}