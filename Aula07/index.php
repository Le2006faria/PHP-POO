<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lutadores de UEC</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Lutadores.php';
        $lutadores = array();
        $lutadores[0] = new Lutadores("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
        $lutadores[1] = new Lutadores("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutadores[2] = new Lutadores("SnapShadow", "EUA" , 25, 1.65, 80.9, 12, 2 ,1);
        $lutadores[3] = new Lutadores("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutadores[5] = new Lutadores("UDOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutadores[5] = new Lutadores("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        
        $lutadores[3]->perderLuta();
        $lutadores[3]->apresentar();
        $lutadores[3]->status();
        ?>
        </pre>
    </body>
</html>
