<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Tartaruga.php';
        require_once 'GoldFish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $r = new Reptil();
        $p = new Peixe;
        $a = new Ave();
        $c = new Canguru();
        $ch = new Cachorro;
        $t = new Tartaruga();
        $gf = new GoldFish();
        $aa = new Arara();
        
        echo"<p>--------------------</p>";

        $m->setPeso(85.3);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();
        print_r($m);
        
        echo"<p>--------------------</p>";

        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(0);
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();
        $p->soltarBolha();
        print_r($p);
        
        echo"<p>--------------------</p>";

        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();
        $a->fazerNinho();
        print_r($a);
        
        echo"<p>--------------------</p>";

        $r->setPeso(12.3);
        $r->setIdade(78);
        $r->setMembros(2.4);
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();
        print_r($r);
        
        echo"<p>--------------------</p>";

        $c->setPeso(55.30);
        $c->setIdade(3);
        $c->setMembros(4);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();
        $c->usarBolsa();
        print_r($c);
        
        echo"<p>--------------------</p>";

        $ch->setPeso(3.94);
        $ch->setIdade(5);
        $ch->setMembros(4);
        $ch->locomover();
        $ch->alimentar();
        $ch->emitirSom();
        $ch->abanarRabo();
        $ch->enterraOsso();
        print_r($ch);
        
        echo"<p>--------------------</p>";
        ?>
        </pre>
    </body>
</html>
