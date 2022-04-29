<?php

class Lutador
{

    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empates;
    private $sexo;

    //Metodos

    public function apresentar()
    {
        echo "<p>-----------------------------------</p>";
        echo "<h1>IT'SSSSSS TIMEEEEEEE!!!!!</h1>";
        echo "<p>Ladys and Gentlemans!!!!!</p>";
        echo "Agora é a hora de ver o " . $this->getNome();
        echo " vindo diretamente de " . $this->getNacionalidade();
        echo " no auge dos seus " . $this->getIdade() . " anos";
        echo " com " . $this->getAltura() . "m de altura";
        echo " pesando " . $this->getPeso() . "kg";
        echo " Com o restrospecto de " . $this->getVitoria() . " vitorias ";
        echo $this->getDerrota() . " derrotas e ";
        echo $this->getEmpates() . " Empates</p>";
    }

    public function status()
    {

        echo "<p>-----------</p>";
        echo "" . $this->getNome() . "<br>";
        echo "da categoria " . $this->getSexxo() . "<br>";
        echo "é um peso " . $this->getCategoria() . "<br>";
        echo "já ganhou " . $this->getVitoria() . " vezes,<br>";
        echo "perdeu " . $this->getDerrota() . " vezes,<br>";
        echo "e empatou " . $this->getEmpates() . " vezes.<br>";
    }

    public function ganharLuta()
    {
        $this->setVitoria($this->getVitoria() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrota($this->getDerrota() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Metodos especiais.

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em, $sx)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->sexo = $sx;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitoria = $vi;
        $this->derrota = $de;
        $this->empates = $em;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getVitoria()
    {
        return $this->vitoria;
    }

    public function getDerrota()
    {
        return $this->derrota;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    public function getSexxo()
    {
        return $this->sexo;
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }

    public function setIdade($id)
    {
        $this->idade = $id;
    }

    public function setAltura($al)
    {
        $this->altura = $al;
    }

    public function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }

    public function setSexxo($sx)
    {
        $this->sexo = $sx;
    }

    public function setVitoria($vi)
    {
        $this->vitoria = $vi;
    }

    public function setDerrota($de)
    {
        $this->derrota = $de;
    }

    public function setEmpates($em)
    {
        $this->empates = $em;
    }

    public function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }


}
