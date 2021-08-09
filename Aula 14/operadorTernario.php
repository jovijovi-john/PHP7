<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 14 - Operador ternário</title>

    </head>

    <body>

        <!-- OPERADORES TERNARIOS PODEM SER ENCADEADOS -->

        <?php

            // condicao ? true : false
            
            $usuarioPossuiCartaoLoja = true;
            $valor_compra = 225;
            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if ($usuarioPossuiCartaoLoja OR $valor_compra >= 100){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            }

        ?>

        <h1>Detalhes do pedido</h1>
        <p>
            Possui cartão da loja: 
            <?= // tag de impressao
                // condicao ? true : false
                $usuarioPossuiCartaoLoja ? 'Sim' : 'Não';
            ?>
        </p>

        <p>
            Valor da compra: <?php echo "R$ $valor_compra"?> 
        </p>

        <p>
            Recebeu desconto no frete: 
            <?php 
                $teste = $recebeu_desconto_frete ? "Sim" : "Não";
                echo "$teste";
            ?>
        </p>

        <p>Valor do frete: <?php echo "R$ $valor_frete" ?></p>



    </body>

</html>