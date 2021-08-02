<html>

    <head>
        <meta charset="UTF-8">
        <title>Aula 8 - Constantes em PHP (Prática)</title>
    </head>

    <body>

        <?php
            //define(NOMEDACONSTANTE, valordaconstante);
            define('BD_URL', 'address_bd_dev');
            define('BD_USER', 'user_dev');
            define('BD_PASSWORD', 'password_dev');


            // para constantes não é necessário utilizar o $
            echo BD_URL.'<br/>';
            echo BD_USER.'<br/>';
            echo BD_PASSWORD.'<br/>';
        ?>
    </body>

</html>