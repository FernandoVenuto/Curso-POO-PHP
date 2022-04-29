<?php
require_once './Animal.php';
class Ave extends Animal {
    //Atributos
    protected $corPena;
    //Metodos
    public function fazerNinho(){
        echo "<p>Ninho feito</p>";       
    }

    public function alimentar() {
        echo "<p>Comendo fruta</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }
    //Metodos Especiais
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }



}
