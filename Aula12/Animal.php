<?php

class Animal {
    protected $peso;
    protected $idade;
    protected $membros;
    
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setMembros($membros): void {
        $this->membros = $membros;
    }

    public function locomover() {
    }
    
    public function alimentar() {
    }
    
    public function emitirSom() {
    }
    
}
