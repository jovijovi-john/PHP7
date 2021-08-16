<html>

    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - Estruturas condicionais em PHP</title>
    </head>

    <body>

        <h5>Estruturas Condicionais em PHP</h5>

        <?php

            $nome = "nomeGenerico";
            $x = 5;
            $y = 6;
            echo "if(condicao) { <br/> ...... bloco de codigo <br/> } else { <br/> ..... bloco de codigo2<br/>}";

            if ($nome == "John") {
                printf("<br/>Lindo dms");
            
            } elseif($nome == "nome2"){
                
                printf("<br/>tanto faz");

            } else {
                printf("<br/>qualquer coisa");
            }

            if ($x <> $y){
                echo "<br/> Sim, x == $x e y == $y";
            }

        ?>

    </body>

</html>