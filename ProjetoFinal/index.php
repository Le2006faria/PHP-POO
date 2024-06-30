<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Pessoa.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML15");
        
        $p = new Pessoa("Jubileu", 22, "M");
        
        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");
        
        $visu[0] = new Visualizacao($g[0], $v[2]); // Jubileu assistiu HTML5
        $visu[1] = new Visualizacao($g[0], $v[1]);
        
        $visu[0]->avaliar();
        $visu[1]->avaliarPorcentagem(85);
        
        print_r($v);
        echo "<br>";
        print_r($p);
        echo "<br>";
        print_r($g);
        echo "<br>";
        print_r($visu);
        ?>
        </pre>
    </body>
</html>
