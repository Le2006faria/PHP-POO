<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Heranças da Classe Pessoa</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Funcionario();
        $p4 = new Professor();
        
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claúdio");
        $p4->setNome("Fabiana");
        
        $p1->setSexo("M");
        $p4->setSexo("F");
        
        $p2->setCurso("Informática");
        $p4->setSalario(2500.75);
        $p3->setSetor("Estoque");
        
        $p4->receberAumento(500.20);
        $p3->mudarTrabalho();
        $p2->cancelarMatricula();
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        
        ?>
        </pre>
    </body>
</html>
