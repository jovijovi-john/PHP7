<html>

    <head>
        <meta charset="UTF-8">
        <title>Aula 6 - Alterando valores de variáveis em PHP</title>
    </head>

    <body>

        <?php
            // string
            $nome = "John Víctor";

            // int
            $idade = 18;

            // float
            $peso = 55.70;

            // boolean
            $fumante_sn = true; // representação textual: true == 1    false == vazio;

            $idade = 24;
            $fumante_sn = 'SIM';
        ?>

        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>

    </body>

</html>