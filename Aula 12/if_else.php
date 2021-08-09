<html>

    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - If Else</title>
    </head>

    <body>

        <?php
            
            printf("XOR so é verdadeiro quando APENAS UMA das condicoes é verdadeira<br/><br/>");

            if (5 > 3 XOR 3 > 4) {
                echo "5 > 3 XOR 3 > 4:  Verdadeiro<br/>";
            } else {
                echo "5 > 3 XOR 3 > 4:  Falso<br/>";
            }

            if (2 > 2 XOR 1 > 1){
                echo "2 > 2 XOR 1 > 1:  Verdadeiro<br/>";
            } else {
                echo "2 > 2 XOR 1 > 1:  Falso<br/>";
            }
            
            if (2 > 3 XOR 4 > 1){
                echo "2 > 3 XOR 4 > 1:  Verdadeiro<br/>";
            } else {
                echo "2 > 3 XOR 4 > 1:  Falso<br/>";   
            }

            if (5 == 5 XOR  3 < 8){
                echo "5 == 5 XOR  3 < 8:  Verdadeiro<br/>";
            } else {
                echo "5 == 5 XOR  3 < 8:  Falso<br/>";   
            }

        ?>

    </body>

</html>