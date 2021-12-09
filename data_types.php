<?php

/**
 * 4 tipos escalares/primitivos:
 * boolean
 * integer
 * float
 * string
 * 
 * 4 tipos compuestos:
 * array/arreglo
 * object
 * callable
 * iterable
 */

 $variable_booleana = true;
 $variable_string = "Hola mundo";
 $variable_int = 12;
 $variable_float = 10.5;
 
 echo "La variable \$variable_string es de tipo " . gettype($variable_string) . " y posee el valor $variable_string";