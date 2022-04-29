<?php

abstract class Animal {

    //Atributos
    protected $peso;
    protected $idade;
    protected $membros;

    //Metodos
    abstract function locomover();

    abstract function alimentar();

    abstract function emitirSom();

    //Metodos Especiais
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }

}
