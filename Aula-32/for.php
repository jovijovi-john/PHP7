<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 32 - For, Estruturas de Repetição</title>

    </head>

    <body>

        <?php 

            // break, continue tambem funcionam aqui
            
            /*
            
            for(inicializacao; condicao; incremento){

            }

            importante comentar que a condição nao precisa estar no cabeçalho, ex:

            for ($i = 0; true; i++){
                if ($i == 10){
                    break;
                }
            }

            */

            for ($x = 10; true; $x--){
                if ($x==0){
                    break;
                }

                echo "$x <br/>";
            }

            echo "<hr/>";

            for ($j = 20; $j < 50; $j++){
                if ($j == 30 || $j == 31){
                    continue;
                }

                echo $j."<br/>";
            }

        ?>
    
    </body>

</html>