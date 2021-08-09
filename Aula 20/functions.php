<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 20 - Functions </title>

    </head>

    <body>

        <?php 
        
            // Encapsular um bloco de códigos com um objetivo definido

            function exibirBoasVindas(){
                echo  "Bem vindos ao paraíso, vulgo JOHN!!!";
            };

            function calculaArea($largura, $comprimento){
                return ($largura * $comprimento);
            }

            exibirBoasVindas();
        

            echo "<br/>";
            $area = calculaArea(100, 25);
            echo "$area";

        ?>
    
    </body>

</html>