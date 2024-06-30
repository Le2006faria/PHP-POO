<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02- POO</title>
    </head>
    <body>
        <?php
            require_once 'caneta.php'; //a classe caneta vai ser carragada dentro do index
            
            $caneta1 = new Caneta;
            $caneta1->cor = "Azul";
            $caneta1->ponta = 0.5;
            //zero ou vazio = false; um ou qualquer valor = true
            $caneta1->tampar();
            print_r($caneta1);
            echo"</br>";
            $caneta2 = new Caneta;
            $caneta2->cor ="Verde";
            $caneta2->carga = 50;
            $caneta2->tampar();
            print_r($caneta2);
        ?>
    </body>
</html>
