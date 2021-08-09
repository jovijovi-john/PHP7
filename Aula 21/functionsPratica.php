<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 21 - Functions (pratica) </title>

    </head>

    <body>

        <?php 
        
            // Encapsular um bloco de códigos com um objetivo definido

            function exibirBoasVindas(){
                echo  "Bem vindos ao paraíso, vulgo JOHN!!!";
            };

            function calcularArea($largura, $comprimento){
                return ($largura * $comprimento);
            }

            exibirBoasVindas();
        

            echo "<br/>";
            $area = calcularArea(100, 25);
            echo "$area <br/>";
            echo calcularArea(25, 35);

        ?>
    
    </body>

</html>