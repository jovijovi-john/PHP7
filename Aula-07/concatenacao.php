<html>

    <head>
        <meta charset="UTF-8">
        <title>Aula 7 - Concatenação de Strings</title>
    </head>

    <body>

        <?php

            $nome = 'John';
            $cor = 'preto';
            $idade = 21;


            // o operador . serve para concatenar strings
            echo 'Olá '.$nome.', sua cor preferida é '.$cor.' e você tem '.$idade.' anos :D<br/>';
            echo "Oi $nome gostoso, prazer conhecê-lo :D<br/>"; // so da pra fazer isso se for aspas duplas
            echo 'Oi $nome gostoso, prazer conhecê-lo :D<br/>' // com aspas simples vai considerar tudo como texto
        ?>

    </body>

</html>