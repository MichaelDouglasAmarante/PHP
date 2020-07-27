<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Projeto Final</title>
</head>
<body>
    <?php
        require_once 'Video.php';
        require_once 'Usuario.php';
        require_once 'Visualizacao.php';

        $video[0] = new Video("Aula 1 de POO");
        $video[1] = new Video("Aula 2 de POO");
        $video[2] = new Video("Aula 3 de POO");

        $usuario[0] = new Usuario("Michael",21,"Masculino","Mic");
        $usuario[1] = new Usuario("Suélen",22,"Feminino","Suka");

        $visualizacao[0] = new Visualizacao($usuario[0],$video[2]);
        $visualizacao[1] = new Visualizacao($usuario[0],$video[0]);

        $visualizacao[0]->avaliar();
        var_dump($visualizacao);
        

    ?>
</body>
</html>