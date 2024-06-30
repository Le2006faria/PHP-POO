<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ContaBanco.php';

            $pessoa1 = new ContaBanco();
            $pessoa2 = new ContaBanco();

            $pessoa1->abrirConta("CC");
            $pessoa1->setNumConta(1111);
            $pessoa1->setDono("Jubileu");
            $pessoa2->abrirConta("CP");
            $pessoa2->setNumConta(2222);
            $pessoa2->setDono("Creusa");

            $pessoa1->depositar(300);
            $pessoa2->depositar(500);

            $pessoa1->pagarMensal();
            $pessoa2->pagarMensal();

            $pessoa1->sacar(338);
            $pessoa2->sacar(630);
            $pessoa1->fecharConta();
            $pessoa2->fecharConta();

            print_r($pessoa1);
            print_r($pessoa2);
            ?>
        </pre>
    </body>
</html>
