<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    //Atributos
    private $matr;
    private $curso;
    
    //Metodos
   public function matricular(){
        $this->setMatr("Matriculada");
    }
    
    public function cancelarMatr(){
        $this->setMatr("Cancelada");
    }
    //Metodos Especiais
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr){
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
