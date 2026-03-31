<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $num = 1;
        //operadores comparação / lógicos
        echo '-- ínicio do loop --  <br />';   

        while($num < 10){ //condição de parada
           

            $num++; //critério da parada

            if($num == 2 || $num == 6){
                continue; //pula a iteração atual e continua o loop
            }

            echo "$num <br />";


            //break -> para o loop
            //continue -> pula a iteração atual e continua o loop
            // if($num == 26){
            //     break; //para o loop
            // }
        }
        echo '-- fim do loop -- ';
    
    ?>


    
</body>
</html>