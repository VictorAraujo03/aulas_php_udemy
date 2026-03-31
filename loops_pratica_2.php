<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $funcionarios = array(
            array( 'nome' => 'João', 'salario' => 2000, 'data_de_nascimento' => '1990-01-01' ),
            array( 'nome' => 'Maria', 'salario' => 2500, 'data_de_nascimento' => '1992-02-02'), 
            array( 'nome' => 'José', 'salario' => 3000, 'data_de_nascimento' => '1988-03-03')
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {

            foreach($funcionario as $idx2 => $valor) {    
                    echo "$idx2 - $valor <br />";
                }
                echo '<hr/>';

            }
    
    ?>
    
</body>
</html>