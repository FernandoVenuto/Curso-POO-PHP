<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {

    //Atributos
    private $especialidade;
    private $salario;

    //metodos
    public function receberAumento($aum) {
        echo"<p>$this->nome você irá receber um aumento de $aum no seu salario de $this->salario</p>";
        $this->salario += $aum; /* Para que a função receba um valor é necessario
          passar a ela um paramentro por meio de uma variavel */
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

}
