<?php
require_once './Animal.php';
class Reptil extends Animal {
    //Atributos
    protected $corEscama;
    //Metodos
    
    public function alimentar() {
        echo "<p>Comendo folha</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Reptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    //Metodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }



}
