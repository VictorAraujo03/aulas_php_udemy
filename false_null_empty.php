<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //false (true/false) - tipo variavel booleana
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(empty($funcionario1)){
            echo "O funcionário é null";
        } else {
            echo "O funcionário não é null";

        }

        echo "<br />";
        if(empty($funcionario2)){
            echo "O funcionário é null";
        } else {
            echo "O funcionário não é null";

        }

        echo "<br />";

        //valores vazios?
        if(empty($funcionario1)){
            echo "O funcionário é vazio";
        } else {
            echo "O funcionário não é vazio";

        }

        echo "<br />";
        if(empty($funcionario2)){
            echo "O funcionário é vazio";
        } else {
            echo "O funcionário não é vazio";

        }

        //valores booleanos
        echo "<br />";
        //valores vazios?
        if(empty($funcionario3)){
            echo "O funcionário é vazio";
        } else {
            echo "O funcionário não é vazio";

        }

        echo "<br />";
        if(empty($funcionario3)){
            echo "O funcionário é vazio";
        } else {
            echo "O funcionário não é vazio";

        }




    ?>
    
</body>
</html>