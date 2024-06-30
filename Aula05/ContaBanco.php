<?php

class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->saldo = 150;
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>A conta ainda tem dinheiro, não posso fecha-lá!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>A conta está em débito. Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo"<p>Conta de " . $this->getDono() . " fechada com sucesso </p>";
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            //$this->saldo = $this->saldo + $valor;
            echo "<p>Deposito de R$ $valor na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                //$this->saldo = $this->saldo - $valor;
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor autrizado na conta do(a) " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo"<p>Não posso sacar em uma conta fechada.</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p> Mensalidade de R$ $valor debitada na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Porblemas com a conta.Não posso cobrar.</p>";
        }
    }

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
}
