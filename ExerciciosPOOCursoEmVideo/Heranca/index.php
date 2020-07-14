<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Herança </title>
</head>
<body>
    <?php
        require_once("Pessoa.php");
        require_once("Aluno.php");
        require_once("Professor.php");
        require_once("Funcionario.php");
        $pessoa[0] = new Pessoa("Michael",21,"Masculino");
        $pessoa[1] = new Aluno("Suélen",22,"Feminino");
        $pessoa[2] = new Professor("Mayara",30,"Feminino");
        $pessoa[3] = new Funcionario("Murilo",18,"Masculino");

        $pessoa[1]->setCurso("Informática");
        $pessoa[2]->setSalario(2.500);
        $pessoa[3]->setSetor("Estoque");

        $pessoa[3]->mudarTrabalho();
        var_dump($pessoa);
    ?>
</body>
</html>