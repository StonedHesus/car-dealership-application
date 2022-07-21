<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_types = 1);

abstract class Logger
{
    // Attributes/fields of the class.
    private string $type;

    public function __construct(string $type){

        if(!in_array(strtolower($type), ['database', 'pdf']))
            throw new \http\Exception\InvalidArgumentException("The demanded type for the logger
             is not supported");

        $this->type = $type;
    }

}