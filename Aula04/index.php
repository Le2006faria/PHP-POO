<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04-POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC", "Azul", 0.5);
            print_r($c1);
            //$c1->setModelo("BIC");
            //$c1->modelo = "BIC"; dá certo, é público
            //$c1->setPonta(0.5);
            //$c1->ponta = 0.5; não dá certo, é privado
            
            //print_r($c1);
            //echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        ?>
        </pre>
    </body>
</html>
