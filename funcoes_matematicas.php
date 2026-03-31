<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //ceil($numero) -> arredonda um número para cima
        //floor($numero) -> arredonda um número para baixo
        //round($numero) -> arredonda um número para o inteiro mais próximo
        //rand() -> gera um número inteiro aleatório
        //sqrt($numero) -> retorna a raiz quadrada de um número
        $num = 7.3; // .0 e .4 arredonda para baixo / .5 e acima arredonda para cima
        echo ceil($num)."<br />"; //arredonda para cima;
        echo floor($num)."<br />"; //arredonda para baixo;
        echo round($num)."<br />"; //arredonda para o inteiro mais próximo;
        echo rand(1, 60)."<br />"; //gera um número inteiro aleatório entre 1 e 60;
        //ou
        echo rand()."<br />"; //gera um número inteiro aleatório entre 0 e o valor máximo permitido pelo sistema;
        echo sqrt(16)."<br />"; //retorna a raiz quadrada de um número;


    ?>
    
</body>
</html>