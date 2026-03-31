<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $itens = array('sofá', 'mesa', 'cadeira', 'estante');
        
        echo '<pre>';
            print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {
            echo "$item <br />";

            if($item == 'mesa') {
                echo ' (*Compre uma mesa e ganhe uma cadeira grátis*) <br />';
            }

            echo '<hr />';
        }
    
    ?>
    
</body>
</html>