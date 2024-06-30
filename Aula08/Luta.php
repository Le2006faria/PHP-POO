<?php

require_once 'Lutadores.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta($lutadores1, $lutadores2) {
        // Debug: Exibir categorias dos lutadores
        echo "<p>Categoria do Lutador 1: " . $lutadores1->getCategoria() . "</p>";
        echo "<p>Categoria do Lutador 2: " . $lutadores2->getCategoria() . "</p>";

        if ($lutadores1->getCategoria() == $lutadores2->getCategoria() && $lutadores1 != $lutadores2) {
            $this->aprovada = true;
            $this->desafiado = $lutadores1;
            $this->desafiante = $lutadores2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function luta() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome() . " venceu a luta </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante->getNome() . " venceu a luta </p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer.</p>";
        }
    }
}
