<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        //.. lógica ..//
        // define('BD_URL', 'endereco_bd_prod'); //nao é permitido redefinir uma constante, ou seja, o valor da constante nao pode ser alterado depois de definido


        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';
    ?>
    
</body>
</html>