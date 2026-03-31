<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //strtolower() - converte uma string para letras minúsculas
        //strtoupper() - converte uma string para letras maiúsculas
        //ucfirst() - converte a primeira letra de uma string para maiúscula
        //strlen() - retorna o tamanho de uma string
        //str_replace() - substitui uma parte de uma string por outra
        //substr() - retorna uma parte de uma string


        $texto = 'Curso Completo de PHP';

        //string to lower
        echo $texto . "<br />";
        echo strtolower($texto) ."<br />";

        echo "<hr>";
        //string to upper
        echo $texto . "<br />";
        echo strtoupper($texto) ."<br />";

        echo "<hr>";
        //ucfirst
        echo $texto . "<br />";
        echo ucfirst($texto) ."<br />";

        echo "<hr>";
        //strlen
        echo $texto . "<br />";
        echo strlen($texto) ."<br />";

        echo "<hr>";
        //str_replace
        echo $texto . "<br />";
        echo str_replace('PHP', 'JavaScript', $texto)."<br />";

        echo "<hr>";
        //substr
        echo $texto . "<br />";
        //'Curso Completo de PHP'
        //012345...20
        echo substr($texto, 6, 8);


    ?>
    
</body>
</html>