<?php
class ejemplo{
    public $nombre;

    public function __construct($n){
        $this->nombre = $n;
    }
    public function saludar($otro = null){
        echo "<p>primer Hola ".$this->nombre."</p>";
        if($otro != null){
            echo "<p>segundo Hola ".$otro."</p>";
        }
    }
}

$persona = new ejemplo("Juan");
$persona->saludar();
$persona->saludar('Pedro');