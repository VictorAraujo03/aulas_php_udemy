<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo date('d/m/Y H:i'); //dia
        // // dia/mes/ano horas:minutos
        // echo date_default_timezone_get(); //mostra o fuso horário do sistema
        // echo date_default_timezone_set('America/Sao_Paulo'); //define o fuso horário do sistema
        // echo '<br />';
        // echo date('d/m/Y H:i'); //dia
        // // dia/mes/ano horas:minutos

        $data_inicial = '2026-03-27';
        $data_final = '2026-04-11';

        //timestamp
        //01/01/1970 --- 24/03/2026 (js usa milissegundos e php usa segundos)
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br />'; 
        echo $data_final . ' - ' . $time_final;

        $diferenca_times = abs($time_final - $time_inicial); //abs() -> valor absoluto, ou seja, sempre retorna um número positivo
        echo '<br />';
        echo 'Diferença de segundos entre a data inicial e a data final: ' . $diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60; //24 horas * 60 minutos * 60 segundos

        echo '<br />';
        echo "Um dia possui $segundos_existem_dia segundos";

        $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
        echo '<br />';
        echo "A diferença em dias é: " . $diferenca_de_dias_entre_as_datas;

        


    ?>
    
</body>
</html>