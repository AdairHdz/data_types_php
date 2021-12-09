<?php

// Forma 1 de declarar un array
$variable_array = array();

// Agregar un elemento al final del arreglo
array_push($variable_array, "Armando", "José", "Carlos");
var_dump($variable_array);

// Reemplazar un elemento
array_splice($variable_array, 0, 1, "Nuevo valor");
var_dump($variable_array);

// Reemplazar o modificar un elemento
$variable_array[0] = "Nuevo valor editado";
var_dump($variable_array);

// Eliminar el último elemento
array_pop($variable_array);
var_dump($variable_array);

// Eliminar el primer elemento
array_shift($variable_array);
var_dump($variable_array);

echo "El número de elementos en el array es " . count($variable_array) . PHP_EOL;

// Segunda forma de declarar un arreglo
$variable_array2 = [];
var_dump($variable_array2);

$variable_array3 = array(
    "abc123" => "Usuario 1",
    "Usuario 2",
    "def456" => "Usuario 3",
    10 => "Usuario 5",
    "Usuario 6"
);

var_dump($variable_array3);

$variable_array4 = array(
    "8" => "Clave convertida a integer",
    true => "Clave convertida a integer (1)",
    false => "Clave convertida a integer (0)",
    9.3 => "Clave convertida a integer (9)",
    null => "Clave convertida a un string vacío"
);

var_dump($variable_array4);
