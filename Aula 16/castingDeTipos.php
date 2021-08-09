<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 16 - Casting</title>

    </head>

    <body>

        <!-- 
                        
            int         --- >   float, string
            float       --- >   int, string
            string      --- >   int, float, boolean
            boolean     --- >   int, string

        -->

        <?php

            // gettype() recebe uma variavel e retorna o tipo dela

            $valor = 10; // integer
            $valor2 = (float) 17; // float (ou double )
            $valor3 = (string) 21; 
            $valor4 = (string) 21.5; // float (ou double )
            $valor5 = (int) '22222'; // int ou integer
            $valor6 = (int) 'jojo'; // quando o valor nao é numerico, vai converter pra 0;
            $valor7 = (bool) ' '; // (bool, boolean) qualquer valor diferente de vazio ou 0 vai retornar true(1)
            $valor8 = (string) true;
            $valor9 = (string) false;
            $valor10 = (int) true;
            $valor11 = (int) false;

            echo $valor." ".gettype($valor)."<br/>";
            echo $valor2." ".gettype($valor2)."<br/>";
            echo $valor3." ".gettype($valor3)."<br/>";
            echo $valor4." ".gettype($valor4)."<br/>";
            echo $valor5." ".gettype($valor5)."<br/>";
            echo $valor6." ".gettype($valor6)."<br/>";
            echo $valor7." ".gettype($valor7)."<br/>";
            echo $valor8." ".gettype($valor8)."<br/>";
            echo $valor9." ".gettype($valor9)."<br/>";
            echo $valor10." ".gettype($valor10)."<br/>";
            echo $valor11." ".gettype($valor11)."<br/>";

        ?>

    </body>

</html>