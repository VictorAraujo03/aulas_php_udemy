<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //gettype() => retorna o tipo da viariável
        $valor = 10.67;
        // $valor2 = (double) $valor; //float ou double
        // $valor2 = (string) $valor; 
        // $valor2 = (int) $valor; // integer, int

        // $valor2 = (integer) $valor;

        // $valor2 = (integer) $valor; //bool, boolean

        //$valor2 = (int) $valor;
        $valor2 = (string) $valor;
        $valor3 = (int) $valor2;


        echo $valor. ' ' . gettype($valor);
        echo '<br/>';
        echo $valor2. ' ' . gettype($valor2);
        echo '<br/>';
        echo $valor3. ' ' . gettype($valor3);

        



    ?>
    
</body>
</html>