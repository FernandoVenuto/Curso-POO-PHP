<?php 
    class Caneta{
        public $modelo;
        private $cor;
        private $ponta;

        function __construct($m, $c, $p)
        {
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada=true;
        }
    }
?>