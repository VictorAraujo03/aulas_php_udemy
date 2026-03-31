<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //
        $usuario_possui_cartao_loja = true;
        $valor_compra = 500;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete);

        $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;


        // if ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
        //     $valor_frete = 0;
        //     $recebeu_desconto_frete = true;

        // }

     ?>

     <h1>Detalhes do pedido</h1>
     <p>Possui o cartão da loja? <?= $usuario_possui_cartao_loja ? 'Sim' : 'Não' ?></p>
        <?php 
            //<condicao> ? true : false

            $usuario_possui_cartao_loja ? 'Sim' : 'Não';

            // if($usuario_possui_cartao_loja == true){
            //     echo 'Sim';
            // } else {
            //     echo 'Não';
            // }
        
        ?>

    <p>Valor da compra: <?= $valor_compra ?></p>
     <p>Recebeu desconto do frete: <?= $recebeu_desconto_frete ? 'Sim' : 'Não' ?></p>
        <?php 
            $teste = $recebeu_desconto_frete ? 'Sim' : 'Não';

            echo $teste;

            // if($recebeu_desconto_frete == true){
            //     echo 'Sim';
            // } else {
            //     echo 'Não';
            // }
        
        ?>
        <p>
            Valor do frete: <?= $valor_frete ?>
        </p>
     
    
</body>
</html>