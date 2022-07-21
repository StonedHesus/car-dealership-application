<?php

// Utilise the strict_type directive so as to receive better typing errors.
declare(strict_types = 1);

interface LoggerInterface{

    public function write(string $information) : bool;

}