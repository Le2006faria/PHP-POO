<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto controle remoto</h1>
        <pre>
            <?php
            require_once 'ControleRemoto.php';
            $controle1 = new ControleRemoto();
            $controle1->ligar();
            $controle1->abrirMenu();
            $controle1->maisVolume();
            ?>
        </pre>
    </body>
</html>
