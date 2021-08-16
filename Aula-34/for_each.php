<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 34 - For Each - Estruturas de Repetição </title>

    </head>

    <body>

        <?php 

            // for each é especializado em percorrer arrays e objetos

            $champions = ["Thresh", "Kassadin", "Jax", "Malzahar", "Orianna", "Alistar", "Malphite", "Braum"];

            echo "<pre>";
            print_r($champions);    
            echo "</pre>";

            foreach($champions as $champion){

                if ($champion == "Kassadin"){
                    echo 
                        "<p style='color: #25005c; font-weight: bold;'>"
                        .$champion."<p>";
                } 
                else if ($champion == "Thresh"){
                    echo
                        "<p style='color: #00913f; font-weight: bold;'>"
                        .$champion."<p>";
                }
                else {
                    echo $champion."<br/>";
                }
            }
        ?>
    
    </body>

</html>