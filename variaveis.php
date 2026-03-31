<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
</head>
<body>
    <?php
        //string
        $nome = "Victor Araujo";

        //int
        $idade = 22;

        //float
        $peso = 86.5;

        //boolean
        $fumante = false; //true = 1 e false = vazio


    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>Peso: <?php echo $peso; ?></p>
    <p>Fumante: <?php echo $fumante; ?></p>

    
</body>
</html>