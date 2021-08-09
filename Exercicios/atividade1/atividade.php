<html>

    <head>

        <title>
            Atividade 1 -> PHP
        </title>

    </head>

    <body>

        <p>    
            Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro momento faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de atribuição.
        </p>

        <p>
            Se a idade informada estiver entre(e inclusive) 16 e 69 anos e o peso for maior ou igual a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".
        </p>

        <b>
        <?php   

            $idade = 19;
            $peso = 55.7;

            if (($idade >= 16 && $idade <= 69 ) && ($peso >= 50)){
                echo "Atende aos requisitos";
            } else {
                echo "Não atende aos requisitos";
            }

        ?>
        </b>

    </body>

</html>