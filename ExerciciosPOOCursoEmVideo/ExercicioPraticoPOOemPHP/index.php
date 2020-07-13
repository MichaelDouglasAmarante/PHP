<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Exercício Pratico POO em PHP</title>
</head>
<body>
    <?php
        require_once("Livro.php");

        $pessoa[0] = new Pessoa("Michael",21,"Masculino");
        $pessoa[1] = new Pessoa("Suélen",22,"Feminino");

        $livro[0] = new Livro("Design Patterns com PHP 7","Gabriel Anhaia",150,$pessoa[0]);
        $livro[1] = new Livro("Orientação a Objetos","Thiago Leite e Carvalho",377,$pessoa[0]);
        $livro[2] = new Livro("Programação Web avançada com PHP","Flávio Lisboa",206,$pessoa[1]);


        $livro[0]->abrirLivro();
        $livro[0]->folhear(500);
        $livro[0]->detalhes();
        echo "<hr>";
        $livro[1]->abrirLivro();
        $livro[1]->avancarPagina();
        $livro[1]->fecharLivro();
        $livro[1]->detalhes();
        echo "<hr>";
        $livro[2]->abrirLivro();
        $livro[2]->folhear(46);
        $livro[2]->voltarPagina();
        $livro[2]->detalhes();

    ?>
</body>
</html>