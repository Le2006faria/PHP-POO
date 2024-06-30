<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02- POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'caneta.php'; //a classe caneta vai ser carragada dentro do index
            
            $caneta1 = new Caneta;
            $caneta1->modelo = "BIC cristal";
            $caneta1->cor = "Azul";
            $caneta1->tampar();
            print_r($caneta1);
        ?>
        </pre>
    </body>
</html>
