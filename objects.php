<?php

class MiClase {
    public $var = "Valor predeterminado";

    function saludar() {
        echo "Hola mundo" . PHP_EOL;
    }
}

$instancia = new MiClase();
$instancia_sin_parentesis = new MiClase;
$nombre_clase_a_instanciar = "MiClase";
$instancia_string = new $nombre_clase_a_instanciar;

$instancia->var = "Valor asignado desde afuera\n";
// echo $instancia->var;
// $instancia->saludar();

class ClaseHija extends MiClase {
    public $propiedad;
    private $propiedad_privada;
    private const MI_CONSTANTE = "Este es el valor de MI_CONSTANTE";

    function __construct($propiedad, $propiedad_privada)
    {
        $this->propiedad = $propiedad;
        $this->propiedad_privada = $propiedad_privada;
    }

    function obtener_valor_constante() {
        return self::MI_CONSTANTE;
    }

    public function saludar($mensaje = "Nuevo mensaje") {
        echo $mensaje . PHP_EOL;
        parent::saludar();
    }

    function get_propiedad_privada() {
        return $this->propiedad_privada;
    }

    function set_propiedad_privada($nuevo_valor) {
        $this->propiedad_privada = $nuevo_valor;
    }
}

$hija = new ClaseHija(5, 8);
// $hija->saludar();
// $hija->set_propiedad_privada("Nuevo valor a propiedad privada");
// echo $hija->propiedad . PHP_EOL;
// echo $hija->get_propiedad_privada();
echo $hija->obtener_valor_constante() . PHP_EOL;
// echo ClaseHija::MI_CONSTANTE;