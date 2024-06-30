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
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $m = new Mamifero();
            $l = new Lobo();
            $c = new Cachorro();
            
            echo "<p>--------------------</p>";
            $m->emitirSom();
            print_r($m);
            echo "<p>--------------------</p>";
            $l->emitirSom();
            print_r($l);
            echo "<p>--------------------</p>";
            $c->emitirSom();
            $c->reagirFrase("Olá");
            $c->reagirFrase("Vai apanhar");
            print_r($c);
            echo "<p>--------------------</p>";
            
            ?>
        </pre>
    </body>
</html>
