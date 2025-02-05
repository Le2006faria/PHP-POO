<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<p>-------- MENU --------</p>";
        echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu() {
        echo "<br>Fechando o Menu...</br>";
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() > - 5);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }

    public function play() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(true);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->getTocando(false);
        }else{
            echo "<p>ERRO! A TV está desligada.</p>";
        }
    }
}
