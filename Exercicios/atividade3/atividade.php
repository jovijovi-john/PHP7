<html>

    <head>
        
        <meta charset="UTF-8">
        <title>
            Atividade 3 -> PHP
        </title>

    </head>

    <body>

        <?php 
            $numeros_sorteados = array();

            for ($i = 0; $i < 6; $i++){
                
                $numSorteado = rand(0, 60);
                
                if (!in_array($numSorteado, $numeros_sorteados)){   
                    $numeros_sorteados[] = $numSorteado;
                } else {
                    $i--;
                }

            };

            sort($numeros_sorteados);

            echo "<pre>";
            print_r($numeros_sorteados);
            echo "</pre>";
        ?>
    
    </body>

</html>