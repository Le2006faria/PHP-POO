<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            $v1 = new Visitante();
            $v1->setNome("Felipe");
            $v1->setIdade(17);
            $v1->setSexo("M");
            print_r($v1);

            echo"<br>";

            $a1 = new Aluno();
            $a1->setNome("Letícia");
            $a1->setMatricula(11111);
            $a1->setIdade(17);
            $a1->setSexo("F");
            $a1->setCurso("Desenvolvimento de Sistemas");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setNome("Lidiane");
            $b1->setMatricula(11111);
            $b1->setIdade(17);
            $b1->setSexo("F");
            $b1->setCurso("Ciência da Computação");
            $b1->pagarMensalidade();
            print_r($b1);
            ?>
        </pre>
    </body>
</html>
