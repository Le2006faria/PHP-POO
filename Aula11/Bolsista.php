<?php

require_once 'Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo"<p>Bolsa renovada</p>";
    }
    
        public function pagarMensalidade() {
        echo "<p>O(A) aluno(a) <strong>" . $this->getNome()  ."</strong> é bolsista, paga com desconto.</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }

}
