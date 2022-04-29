<?php
require_once'Aluno.php';
class Bolsista extends Aluno {
    //Atributos
    private $bolsa;
    //Metodos
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }
     public function pagarMensalidade(){
         echo "<p>$this->nome é bolsista portanto paga com desconto</p>";
     }
    //Metodos Especiais
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

}
