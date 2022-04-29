<?php

require_once './Animal.php';

class Peixe extends Animal {

    //atributos
    protected $corEscama;

    //metodos
    public function soltarBolha() {
        echo "<p>Blub</p>";
    }

    public function alimentar() {
        echo "<p>Comendo minhoca</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }
    //Metodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }



}
