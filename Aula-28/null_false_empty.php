<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 28 - Tipos Especiais</title>

    </head>

    <body>

        <?php 
            
                /*
                    * null          também é considerado vazio
                    * empty         
                    * false         também é considerado vazio
                */
            
                $var1 = null;
                $var2 = '';
                $var3 = false;

                echo "<h1>valores null</h1>";
                echo is_null($var1) ? "Sim, a variável é null" : "Não, a variável não é null";
                echo "<br/>";
                echo is_null($var2) ? "Sim, a empty é null" : "Não, empty não é null";
                echo "<br/>";
                echo is_null($var3) ? "Sim, false é null" : "Não, a false não é null";
                echo "<br/>";

                echo "<h1>valores empty</h1>";
                echo empty($var1) ? "Sim, null é empty" : "Não, null não é empty.";
                echo "<br/>";
                echo empty($var2) ? "Sim, a variável está vazia" : "Não, a variável não está vazia.";
                echo "<br/>";
                echo empty($var3) ? "Sim, false é empty" : "Não, false não é empty.";
                echo "<br/>";
                

            ?>
    
    </body>

</html>