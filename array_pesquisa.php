<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //in_array() -> true ou false para a existência de um elemento em um array
        //array_search() -> retorna o indice do valor pesquisado ou false caso não exista

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        //$existe = in_array('Abacate', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio

        $existe = array_search('Uva', $lista_frutas); //retorna o indice do valor pesquisado ou false caso não exista

        if($existe != null){
            echo "A fruta existe na lista";
        } else {
            echo "A fruta não existe na lista";
        }

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'José', 'Maria']
        ];

        echo '<pre>';
            print_r($lista_coisas);
        echo '</pre>';

        in_array('Uva', $lista_coisas['frutas']);

         

    ?>
    
</body>
</html>