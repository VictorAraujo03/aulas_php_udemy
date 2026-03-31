<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $parametro = 1;
        switch($parametro){
            case 1 == $parametro:
                echo 'entrou no case 1';
                break;
            case 2 == $parametro:
                echo 'entrou no case 2';
                break;
            case 3 == $parametro:
                echo 'entrou no case 3';
                break;
            default:
                echo 'nenhum case foi satisfeito';
                break;
        }

    ?>
    
</body>
</html>