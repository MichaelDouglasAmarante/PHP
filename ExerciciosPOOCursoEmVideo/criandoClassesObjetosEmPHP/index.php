<html>
<head>
    <title></title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;

        $c1->tampar();
        var_dump($c1);

        $c2 = new Caneta();
        $c2->cor = "Vermelha";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
    ?>
</body>
</html>