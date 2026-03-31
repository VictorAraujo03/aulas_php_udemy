<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Fixação Conteúdo</title>
</head>
<body>
    <?php 

        /* Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos,
        númericos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega-sena. Atente-se ao fato de 
        de que os números aletaórios contidos no array não podem se repetidos. */

        $numeros = array();

        while(count($numeros) <= 5) {
            $num = rand(1, 60);
            if(!in_array($num, $numeros)) { //verifica se o número já existe no array
                $numeros[] = $num; //adiciona o número ao array
            }
        }

        echo '<pre>';
            print_r($numeros);
        echo '</pre>';
    
    ?>
    
</body>
</html>