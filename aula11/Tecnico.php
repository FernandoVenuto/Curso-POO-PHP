<?php
require_once 'Aluno.php';
class Tecnico extends Aluno {
    //Atributos
    private $registroProfissional;
    //Metodos
    public function praticar(){
        echo "<p>$this->nome está praticando</p>";
    }
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }
}
