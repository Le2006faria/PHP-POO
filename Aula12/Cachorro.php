<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {

    public function enterraOsso() {
        echo "<p>Enterrando osso</p>";
    }
    
    public function abanarRabo(){
        echo "<p>Abanando o rabo</p>";
    }
    
}
