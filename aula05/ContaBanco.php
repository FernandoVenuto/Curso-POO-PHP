<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;



    ////Métodos 
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>A conta ainda possui dinheiro, não é possivel fechar</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>A conta está em débito. Impossivel encerrar!</p>";
        } else {
            $this->setStatus = false;
            echo "<p>Conta fechada</p>";
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$$v realizado na conta de ". $this->getDono()."</p>";
        } else {
            echo "<p>Conta fechada. Não consigo depositar</p>";
        }
    }
    public function sacar($v)
    {
        if ($this->getStatus()) { // Colocando o getStatus() não precisa confirmar se ele é true.
            if ($this->getSaldo() > $v) {
                // $this->saldo = $this->saldo-$v;
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$$v autorizado na conta de ". $this->getDono()."</p>";
            } else {
                echo "Saldo insuficiente para saque.";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensailidade de R$$v paga da conta de " . $this->getDono()."</p>";
        } else {
            echo "problemas com a conta.";
        }
    }

    ////Metodos Especiais
    public function __construct()
    {   /*
        $this->saldo = $s;
        $this->status = $st;

        $s = 0;
        $st = false;
        */

        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>Conta criada com sucesso.</p>";
    }

    public function getnumConta()
    {
        return $this->numConta;
    }
    public function setnumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo  = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

