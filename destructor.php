<?php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
    function saludar(){
        echo "<p>soy el padre</p>";
    }
}

class SubClass extends BaseClass {

    private ?int $unidades;
    private ?string $nombre;

    function __construct($u = null, $n = null) {
        //parent::__construct();
        $this->unidades = $u;
        $this->nombre = $n;
        print "In SubClass constructor\n".$this->unidades."\n";
    }
    public function saludar():static{

        echo "<p>soy el hijo</p>";
        $new = new static();
        return $new;
    }

    function __destruct() {
        print "Destroying " . $this->name . "\n";
    }-
}

$sub = (new SubClass)->saludar();
