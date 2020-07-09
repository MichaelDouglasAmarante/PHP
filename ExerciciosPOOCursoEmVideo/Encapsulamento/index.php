<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 006 - Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once("ControleRemoto.php");

        $controle1 = new ControleRemoto();

        $controle1->ligar();
        $controle1->maisVolume();
        $controle1->abrirMenu();

    ?>
</body>
</html>