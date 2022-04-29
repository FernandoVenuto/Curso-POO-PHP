<?php
require_once './Animal.php';
class Mamifero extends Animal {
    //Atributos
    protected $corPelo;
    
    //Metodos
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }
    //Metodos especiais
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }



}
