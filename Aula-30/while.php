<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 30 - While, Estruturas de Repetição</title>

    </head>

    <body>

        <?php 

            // break, continue tambem funcionam aqui

            $x = 1;
            
            echo "-- Início do loop -- <br/>";
            while ($x < 50) {
            

                $x++;
                if($x == 10){
                    continue;
                }
    
                echo "$x <br/>";                

                if ($x == 15){
                    break;
                }

                
            }
            echo "-- Fim do loop -- <br/>";

        ?>
    
    </body>

</html>