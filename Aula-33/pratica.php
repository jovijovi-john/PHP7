<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 33 - Estruturas de Repetição (prática)</title>

    </head>

    <body>

        <?php 

            $registros = array(
                ["titulo" => "Título notícia 1", "conteudo" => "Conteúdo notícia 1"],
                ["titulo" => "Título notícia 2", "conteudo" => "Conteúdo notícia 2"],
                ["titulo" => "Título notícia 3", "conteudo" => "Conteúdo notícia 3"]
            );
            
            $registros[] = ["titulo" => "Título notícia 4", "conteudo" => "Conteúdo notícia 4"];
            $registros[] = ["titulo" => "Título notícia 5", "conteudo" => "Conteúdo notícia 5"];

            $idx = 0;
            while ($idx < count($registros)){
                echo "<h3>".$registros[$idx]["titulo"]."</h3>";
                echo "<p style='color:red';>".$registros[$idx]["conteudo"]."</p><hr/>";
                $idx++;
            }
        ?>
    
    </body>

</html>