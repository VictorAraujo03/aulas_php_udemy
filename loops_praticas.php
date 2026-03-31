<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $registros = array(
            array('titulo' => 'Título noticia 1', 'conteudo' => 'Conteudo noticia 1'),
            array('titulo' => 'Título noticia 2', 'conteudo' => 'Conteudo noticia 2'),
            array('titulo' => 'Título noticia 3', 'conteudo' => 'Conteudo noticia 3'),
            array('titulo' => 'Título noticia 4', 'conteudo' => 'Conteudo noticia 4')
        );

        echo '<pre>';
            print_r($registros);
        echo '</pre>';
        echo '<br /><br /> <br/>';
        $idx = 0;

        //count -> conta a quantidade de elementos do array
        echo 'Quantidade de registros: ' . count($registros) . '<br />';


        //while -> executa o bloco de código enquanto a condição for verdadeira
        // while($idx < count($registros)) {

        //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        //     echo '<hr />';

        //     $idx++;
        // }


        //do while -> executa o bloco de código pelo menos uma vez, e depois verifica a condição
        // do {
        //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        //     echo '<hr />';

        //     $idx++;
        // } while ($idx < count($registros));



        //for -> executa o bloco de código um número determinado de vezes
        for ($idx = 0; $idx < count($registros); $idx++) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr />';
        }
        
    ?>
    
</body>
</html>