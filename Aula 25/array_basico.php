<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 25 - Arrays (básico)</title>

    </head>

    <body>

        <?php 
        
            // ! ARRAYS SEQUENCIAIS (NUMÉRICOS)
            
            // O vardump apresenta informações acerca do tipo do dado presente em cada posição do array;
            // Já o print_r apresenta as informações de maneira mais simplificada.

            // * a tag <pre> apresenta o texto de maneira pre formatada, é muiito bom.

            $lista_de_frutas = array('banana', 'uva', 'maracujá', 'abacate');
            
            echo "<b>var_dump(\$lista_de_frutas):</b> <pre>";
                var_dump($lista_de_frutas);
            echo '</pre><hr/> <b>print_r(\$lista_de_frutas): </b><pre>';
                print_r($lista_de_frutas);
            echo "</pre><hr/>";

            // Para adicionar um novo valor no array, basta fazer $nomeDoArray[] = novoValor;

            $lista_de_frutas[] = "morango";
            echo "<b>print_r(\$lista_de_frutas): </b><pre>";
                var_dump($lista_de_frutas);
            echo "</pre><br/>";
            
            //-----------------------------------------------------------------------------------------------

            // outra maneira de declarar arrays
            $time = ["gabigostosa", "arrascaxeira", "bh"];
            echo "<b>var_dump(\$time): </b><pre>";
                var_dump($time);
            echo "</pre><hr/>";
            
            $time[] = "er7";
            
            echo "<b>var_dump(\$time): </b><pre>";
                var_dump($time);
            echo "</pre><hr/>";

            echo $time[0]." melhor que zico!<br/>";

            // ! ARRAYS ASSOCIATIVOS

            // declara-se explicitamente qual é a posição do array;

            $time_futebol = ["tecnico" => "JJ", "capita" => "diego", "camisa10" => "michael"];
            echo "<b>var_dump(\$time_futebol): </b><pre>";
                var_dump($time_futebol);
            echo "</pre><hr/>";

        ?>
    
    </body>

</html>