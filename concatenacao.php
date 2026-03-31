<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacao</title>
</head>
<body>
    <?php
        $nome = "Victor";
        $cor = "verde";
        $idade = 22;
        $atividade_preferida = "futebol";


        //aspas simples nao permitem a interpolacao de string, ou seja, a variavel é interpretada como texto dentro da string, ja as aspas duplas permitem a interpolacao de string, ou seja, a variavel é interpretada dentro da string
        echo 'Olá ' . $nome . ', sua cor favorita é ' . $cor . ', você tem ' . $idade . ' anos e sua atividade preferida é ' . $atividade_preferida . '!'; //concatenacao de string

        echo '<br>';

        //aspas duplas permitem a interpolacao de string, ou seja, a variavel é interpretada dentro da string, ja as aspas simples nao permitem a interpolacao de string, ou seja, a variavel é interpretada como texto dentro da string
        echo "Olá $nome, sua cor favorita é $cor, você tem $idade anos e sua atividade preferida é $atividade_preferida!"; //interpolacao de string

    ?>
</body>
</html>