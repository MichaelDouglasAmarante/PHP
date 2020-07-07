<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
</head>
<body>
    <?php
        require_once("ContaBanco.php");

        $pessoa1 = new ContaBanco();
        $pessoa2 = new ContaBanco();

        $pessoa1->abrirConta("CC");
        $pessoa1->setDonoConta("Jubileu");
        $pessoa1->setNumConta(1111);

        $pessoa2->abrirConta("CP");
        $pessoa2->setDonoConta("Creuza");
        $pessoa2->setNumConta(2222);

        $pessoa1->depositar(300);
        $pessoa2->depositar(500);

        $pessoa1->sacar(1000);
        $pessoa2->sacar(75);

        $pessoa1->pagarMensalidade();
        $pessoa2->pagarMensalidade();

        $pessoa1->fecharConta();
        $pessoa2->fecharConta();

        $pessoa1->sacar(338);
        $pessoa2->sacar(555);

        $pessoa1->fecharConta();
        $pessoa2->fecharConta();
        
        var_dump($pessoa1);
        var_dump($pessoa2);
    ?>
</body>
</html>