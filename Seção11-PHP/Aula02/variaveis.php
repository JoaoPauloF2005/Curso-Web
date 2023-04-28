<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // string
        $nome = "João Paulo";

        //int
        $idade = 17;

        //float
        $peso = 100.5;

        //boolean
        $fumante_sn = true;

        //... logica ...//
        $idade = 30;

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>