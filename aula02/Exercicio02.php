<?php
class Celular
{

    var $modelo;
    var $cor;
    var $carga;
    var $camera;
    var $ligado;

    function ligar(){
        if ($this->ligado == true) {
            echo "<p>Celular esta ligado</p>";
        } else {
            echo "<p>Ligue o celular</p>";
        }
    }

    function carregar(){
        if ($this->carga == 50) {
            echo "<p>Coloque para carregar</p>";
        } else {
            echo "<p>A bateria não precisa ser carregada</p>";
        }
    }

    function foto(){
        if ($this->camera == "frontal") {
            echo "<p>Da pra você tirar uma selfie<p>";
        } else {
            echo "<p>Tire uma foto da Paisagem!</p>";
        }
    }

//$c2
    function modelo(){
        if($this->modelo == "iphone"){
            echo "<p>Troca de celular pelo amor de deus</p>";
        }else{
            echo "<p>Belo celular</p>";
        }
    }
    function bateria(){
        if($this->carga <= 70){
            echo "<p>Poem essa bomba pra carregar</p>";
        }else{
            echo "<p>Não Precisa carregar deu sorte</p>";
        }
    }
    function camera(){
        if($this->camera == "frontal"){
            echo "<p>Tira uma selfie ai, só comprou o celular pra isso<p>";
        }else{
            echo "<p>Pode tirar uma foto normal e eu nem vou reclamar de vc</p>";
        }
    }
}
