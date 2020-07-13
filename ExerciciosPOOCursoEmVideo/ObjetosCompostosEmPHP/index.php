<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 007 - Objetos Compostos em PHP</title>
</head>
<body>
    <?php
        require_once("Luta.php");

        $lutador = array();

        $lutador[0] = new Lutador("Michael","Brasil",21,1.76,79.8,11,2,5);
        $lutador[1] = new Lutador("Silas","Brasil",21,1.73,65,15,3,0);
        $lutador[2] = new Lutador("Otávio","Brasil",18,1.74,75,13,2,3);

       
        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[0],$lutador[2]);
        
        $UEC01->lutar();
        
        $lutador[0]->status();
        $lutador[2]->status();
    ?>
</body>
</html>