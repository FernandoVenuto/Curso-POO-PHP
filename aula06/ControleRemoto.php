<?php

require_once 'Controlador.php';

//Atributos
class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    ///Metodos especiais

    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    //IMPLEMENTs
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<p>-------Menu-------</p>";
        echo "<br>Está Ligado? " . ($this->getLigado() ? "Sim" : "Não");
        echo "<br>Está Tocando? " . ($this->getTocando() ? "Sim" : "Não");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo"<br>";
    }

    public function fecharMenu() {
        echo "<br> Fechando Menu";
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
            echo "Mudo Ligado";
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro! não posso aumentar o volume</p>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>Erro! não posso diminuir o volume</p>";
        }
    }

    public function pause() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function play() {
        if ($this->getLigado() && ($this->getTocando())) {
            $this->setTocando(false);
        }
    }

}

?>