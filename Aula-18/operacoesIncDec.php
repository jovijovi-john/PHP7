<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 18 - Operadores ede Incremento e Decremento</title>

    </head>

    <body>

        <?php

            /*
            
                *   Pré-incremento ->   (++$var)    Adiciona uma unidade antes de retonar $var
                *   Pós-incremento ->   ($var++)    Retorna $var e depois adiciona uma unidade 
                *   Pré-decremento ->   (--$var)    Diminui uma unidade antes de retonar $var
                *   Pós-decremento ->   ($var--)    Retorna $var e depois diminui uma unidade

            */

            $num1 = 21;
            $num2 = 11;

            echo "A soma entre $num1 e $num2 vale <b>".($num1 + $num2)."</b><br/>";
            echo "A subtração entre $num1 e $num2 vale <b>".($num1 - $num2)."</b><br/>";
            echo "O produto entre $num1 e $num2 vale <b>".($num1 * $num2)."</b><br/>";
            echo "A divisão entre $num1 e $num2 vale <b>".($num1 / $num2)."</b><br/>";
            echo "O módulo entre $num1 e $num2 vale <b>".($num1 % $num2)."</b><br/>";
        ?>

    </body>

</html>