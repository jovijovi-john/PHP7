<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 26 - Arrays Multidimensionais</title>

    </head>

    <body>

        <?php 
            
            $listaCoisas = [];
            $listaCoisas['frutas'] = ['Maçã', 'Banana', 'Morango'];
            $listaCoisas['pessoas'] = [10 => 'John', 15=>'Victor', '21' => 'Zed'];

            echo "<pre>";
                print_r($listaCoisas);
            echo "</pre>";

            echo "<br/>".$listaCoisas['pessoas'][10]." é gostoso";
        ?>
    
    </body>

</html>