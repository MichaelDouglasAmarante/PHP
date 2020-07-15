<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Herança Parte 2</title>
</head>
<body>
    <?php
        require_once 'Aluno.php';
        require_once 'Visitante.php';
        require_once 'Professor.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';

        $pessoa[0] = new Aluno();
        $pessoa[1] = new Visitante();
        $pessoa[2] = new Professor();
        $pessoa[3] = new Bolsista();
        $pessoa[4] = new Tecnico();

       
        var_dump($pessoa[0]);
        var_dump($pessoa[1]);
        var_dump($pessoa[2]);
        var_dump($pessoa[3]);
        var_dump($pessoa[4]);

        $pessoa[1]->setNome('Michael');
        $pessoa[1]->iniciarVisita();
        $pessoa[1]->encerrarVisita();
    ?>
</body>
</html>