<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //void 
        function exibirBoasVindas() {
            echo "Bem-vindo ao curso de PHP! <br />";
        }

        exibirBoasVindas();

        //return (com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        $resultado = calcularAreaTerreno(5, 25);
        echo $resultado;
        
    
    ?>
    
</body>
</html>