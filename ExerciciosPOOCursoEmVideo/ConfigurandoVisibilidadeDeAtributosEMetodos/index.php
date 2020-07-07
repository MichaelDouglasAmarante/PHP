<html>
<head>
    <title>Aula 03 - POO</title>
</head>
<body>
<pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->modelo = "Bic Cristal";

        $c1->rabiscar();
        $c1->tampar();
       
        print_r($c1);
    ?>
</pre>
</body>
</html>