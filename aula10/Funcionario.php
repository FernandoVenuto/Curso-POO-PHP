<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

// Atributos
    private $setor;

//Metodo

    public function mudarTrabalho() {
        $mudar = rand(0, 3);
        switch ($mudar) {
            case 0: // Pedreiro
                $this->setSetor("Pedreiro");
                break;
            case 1: // Limpeza
                $this->setSetor("Limpeza");
                break;
            case 2: //Administração
                $this->setSetor("Administração");
                break;
            case 3: // Desempregado
                $this->setSetor("Você mudou muito de trabalho está demitida!");
        }
    }

//Metodos Especiais

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

}
