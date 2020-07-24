<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Polimorfismo</title>
</head>
<body>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Tartaruga.php';
        require_once 'Cobra.php';
        require_once 'GoldFish.php';
        require_once 'Arara.php';

        $animal[0] = new Mamifero();
        $animal[0]->setPeso(33.5);
        $animal[0]->locomover();
        
        $animal[1] = new Ave();
        $animal[1]->locomover();

        $animal[2] = new Reptil();
        $animal[2]->locomover();

        $animal[3] = new Peixe();
        $animal[3]->locomover();

        echo "<hr>";
        $canguru = new Canguru();
        $cachorro = new Cachorro();

        $tartaruga = new Tartaruga();
        $cobra = new Cobra();

        $peixe = new GoldFish();


        $canguru->locomover();
        $cachorro->locomover();
        $tartaruga->locomover();
        $cobra->locomover();
        $peixe->locomover();

        echo "<hr>";

        $cachorro->emitirSom();
        $canguru->emitirSom();
    ?>
</body>
</html>