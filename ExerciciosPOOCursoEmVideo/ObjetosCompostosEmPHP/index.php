<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 007 - Objetos Compostos em PHP</title>
</head>
<body>
    <?php
        require_once("Lutador.php");

        $lutador = array();

        $lutador[0] = new Lutador("Michael","Brasil",21,1.76,79.8,11,2,5);
        $lutador[1] = new Lutador("Silas","Brasil",21,1.73,65,15,3,0);
        $lutador[2] = new Lutador("Otávio","Brasil",18,1.74,75,13,2,3);

        $lutador[0]->apresentar();
        $lutador[0]->status();

        $lutador[0]->perderLuta();
        $lutador[1]->ganharLuta();

        $lutador[1]->apresentar();
        $lutador[1]->status();

        $lutador[1]->empatarLuta();
        $lutador[2]->empatarLuta();

        $lutador[2]->apresentar();
        $lutador[2]->status();
        
    ?>
</body>
</html>