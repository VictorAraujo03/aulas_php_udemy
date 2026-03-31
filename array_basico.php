<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //sequenciais (numéricos)
        $lista_frutas = ['banana', 'maçã', 'morango', 'uva' , 'abacate'];
        $lista_frutas[] = 'abacaxi'; //adiciona um elemento ao final do array


        // echo '<pre>';
        //     var_dump($lista_frutas); //mostra o tipo da variável e seu conteúdo
        // echo '</pre>';

        // echo '<hr />';
        // echo '<pre>';
        //     print_r($lista_frutas); //mostra o conteúdo da variável de forma mais legível
        // echo '</pre>';

        // echo $lista_frutas[2];

        //associativos
        $lista_frutas = array(
            'a' => 'banana', 
            'b' => 'maçã', 
            'x' => 'morango', 
            'z' => 'uva' , 
            '2' => 'abacate');

        $lista_frutas['w'] = 'abacaxi'; //adiciona um elemento ao final do array

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo $lista_frutas['w']; 
        


    ?>
    
</body>
</html>