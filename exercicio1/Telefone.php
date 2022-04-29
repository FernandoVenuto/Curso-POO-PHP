<?php 
    class Telefone{
        private $cor;
        private $tamanho;
        private $barulho;
        private $ligado;

        // Metodos
        public function vivaVoz(){
            $this-> setligado(true);
            if($this->setvivaVoz(false)){
                echo "<p>O telefone está no viva voz</p>";
            }else{
                echo "<p>O telefone está com o viva voz desligado</p>";
            }

        }

        public function ligar(){
            $this->setligado=true;

        }
        public function desligar(){
            $this->setligado = false;
        }

        // Metodos Especiais

        public function __construct(){
            $this-> cor = "Preto";
            $this -> ligado = false;
            $this -> barulho = false;
        }

        public function setmudarCor($c){
            $this->cor = $c;
        }
        public function getmudarCor(){
            return $this->cor;
        }


        public function setmudarTamanho($mt){
            $this->tamanho  = $mt;
        }
        public function getmudarTamanho(){
            return $this-> tamanho;
        }


        public function setvivaVoz($vv){
            $this->barulho = $vv;
        }
        public function getvivaVoz(){
            return $this-> barulho;
        }


        public function setligado($l){
            $this -> ligado = $l;
        }

        public function getligado(){
            return $this-> ligado;
        }


    }
?>