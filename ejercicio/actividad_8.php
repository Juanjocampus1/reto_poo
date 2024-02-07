<?php

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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudad = $_POST['ciudad'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    // Crear el objeto Persona con los datos del formulario
    $persona = new Persona($nombre, $ciudad, $tipo);

    // Mostrar la ficha de la persona
    echo '<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">';
    echo '<h2 class="text-2xl font-semibold mb-4">Ficha de la persona:</h2>';
    echo '<p class="text-gray-700"><span class="font-bold">Nombre:</span> ' . $persona->nombre . '</p>';
    echo '<p class="text-gray-700"><span class="font-bold">Ciudad:</span> ' . $persona->ciudad . '</p>';
    echo '<p class="text-gray-700"><span class="font-bold">Tipo:</span> ' . $persona->tipo . '</p>';
    echo '</div>';
}

?>
