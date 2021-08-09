<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 19 - Operadores de Incremento e Decremento (prática) </title>

    </head>

    <body>

         
        
        <!-- ----------------------------------------------------------- -->
        
        <h1>
            Pré-incremento
        </h1>

        <?php
            $VAR = 10;

            echo "O valor contido em VAR é $VAR <br/>";
            echo "O valor em VAR com pré incremento vale ".(++$VAR)."<br/>";
            echo "O valor atualizado é $VAR <br/>";
        ?>

        <!-- ----------------------------------------------------------- -->
        
        <h1>
            Pós-incremento
        </h1>
        
        <?php
            $VAR = 10;

            echo "O valor contido em VAR é $VAR <br/>";
            echo "O valor em VAR com pós incremento vale ".($VAR++)."<br/>";
            echo "O valor atualizado é $VAR <br/>";
        ?>
        
        <!-- ----------------------------------------------------------- -->
        
        <h1>
            Pré-decremento
        </h1>
        
        <?php
            $VAR = 10;

            echo "O valor contido em VAR é $VAR <br/>";
            echo "O valor em VAR com pré decremento vale ".(--$VAR)."<br/>";
            echo "O valor atualizado é $VAR <br/>";
        ?>
        
        <!-- ----------------------------------------------------------- -->
        
        <h1>
            Pós-decremento
        </h1>
        
        <?php
            $VAR = 10;

            echo "O valor contido em VAR é $VAR <br/>";
            echo "O valor em VAR com pós decremento vale ".($VAR--)."<br/>";
            echo "O valor atualizado é $VAR <br/>";
        ?>
        
        <!-- ----------------------------------------------------------- -->

    </body>

</html>