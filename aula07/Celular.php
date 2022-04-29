<?php

require_once 'Carcaça.php';

class Celular implements Carcaça {

    private $ligado;
    private $volume;
    private $camera;
    private $telefonar;

    public function __construct() {
        $this->ligado = false;
        $this->voulme = 100;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getCamera() {
        return $this->camera;
    }

    private function getTelefonar() {
        return $this->telefonar;
    }

    private function setTelefonar($telefonar): void {
        $this->telefonar = $telefonar;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setCamera($camera): void {
        $this->camera = $camera;
    }

    //Implements
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function aumentarVolume() {
        if($this->setLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function diminuirVolume() {
        if($this->setLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function telefonar() {
        if($this->setLigado()){
            echo "Chamada em andamento";
        }
    }

    public function tirarFoto() {
        if($this->setLigado()){
            echo "Você".($this->getCamera() ? "não" : "pode"). "tirar a foto.";
        }
    }

    public function abrirMenu() {
        echo "-----Menu-----";
        echo "<br>O seu celular está: " . ($this->getLigado() ? "Ligado" : "Desligado");
        echo "<br>Volume:" . ($this->getVolume());
        for ($i=0; $i <= $this->getVolume();$i+=5){
            echo "/";
        }
        echo"<br>";
    }

}
