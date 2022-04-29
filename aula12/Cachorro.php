<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
    //Atributos
    protected $raça;
    //Metodos
    public function abanarRabo()
    {
        echo "Ata malia coisinha mais linda";
    }

    //Metodos especiais
    public function getRaça()
    {
        return $this->raça;
    }

    public function setRaça($raça)
    {
        $this->raça = $raça;
    }

    public function alimentar()
    {
        echo "Comendo ração";
    }

    public function emitirSom()
    {
        echo "Au Au";
    }
}
