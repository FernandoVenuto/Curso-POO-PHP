<?php

require_once 'Lutador.php';

class Luta
{

    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos publicos
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }

        if ($l1->getSexxo() === $l2->getSexxo()) {
            $this->aprovada = true;
        } else {
            $this->aprovada = false;
        }
    }

    public function lutar()
    {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // Empate
                    echo "---------------------";
                    echo "<p>Vamos para o segundo Round. </p>";
                    $round2 = rand(3, 5);
                    /** @var type $round2 */
                    switch ($round2) {
                        case 3:
                            echo "---------------";
                            echo "<p>Vamos para o terceiro e ultimo Round</p>";
                            $round3 = rand(6, 7);
                            switch ($round3) {
                                case 6:
                                    echo "----------";
                                    echo "<p>O VENCEDOR DA LUTA DE HOJE É " . $this->desafiado->getNome() . "</p>";
                                    break;
                                case 7:
                                    echo "----------";
                                    echo "<p>O VENCEDOR DA LUTA DE HOJE É " . $this->desafiante->getNome() . "</p>";
                            }
                            break;
                        case 4:
                            echo "<p>O VENCEDOR DA LUTA DE HOJE É " . $this->desafiado->getNome() . "</p>";
                            break;
                        case 5:
                            echo "<p>O VENCEDOR DA LUTA DE HOJE É " . $this->desafiante->getNome() . "</p>";
                            break;
                    }
                    break;
                case 1: //Desafiante vence
                    echo "------------------";
                    echo "<p>E O VENCEDOR DA LUTA DE HOJE É " . $this->desafiado->getNome() . "</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                case 2: //Desafiado vence
                    echo "------------------";
                    echo "<p>E O VENCEDOR DA LUTA DE HOJE É " . $this->desafiante->getNome() . "</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "A luta não pode acontecer";
        }
    }

    //Métodos Especiais
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void
    {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }
}
