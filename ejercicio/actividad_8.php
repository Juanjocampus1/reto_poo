<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudad = $_POST['ciudad'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    // Crear el objeto Persona con los datos del formulario
    $persona = new Persona($nombre, $ciudad, $tipo);

    // Mostrar la ficha de la persona
    echo "<h2>Ficha de la persona:</h2>";
    echo $persona;
}

class Persona {
    public $nombre;
    public $ciudad;
    public $tipo;

    public function __construct($nombre, $ciudad, $tipo) {
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->tipo = $tipo;
    }

    public function __destruct() {
        echo "Se ha destruido el objeto";
    }

    public function __toString() {
        return "Nombre: $this->nombre, Ciudad: $this->ciudad, Tipo: $this->tipo";
    }
}
?>
