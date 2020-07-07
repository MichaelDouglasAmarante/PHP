<html>
<head>
    <meta charset="UTF-8">
    <title>Aula 04 - POO</title>
</head>
<body>
<pre>
    <?php
        require_once("Caneta.php"); 
        
        $caneta1 = new Caneta("BIC","Azul",0.5);
        $caneta2 = new Caneta("Crown","Vermelha",0.9);

        $caneta1->setCor("Azul Cristal"); 
        $caneta1->setPonta(0.4); 

        var_dump($caneta1);
        var_dump($caneta2); 

        print "Eu tenho uma caneta {$caneta1->getModelo()} de ponta {$caneta1->getPonta()}";
    ?>
</pre>
</body>
</html>