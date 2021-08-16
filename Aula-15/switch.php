<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 15 - Switch</title>

    </head>

    <body>

        <!-- SWITCH  -->
        <!-- no js a comparação dos cases é por identidade(tipo e valor), aqui é so por igualdade -->

        <?php

            $parametro = '3';

            switch($parametro){
                
                case 1:
                    echo "entrou no case 1";
                    break;
                    
                case 2:
                    /* Veja que o parametro é uma string, e no case é integer, e mesmo assim funcionou.
                    Isso porque a comparação é feita por igualdade e não por identidade */
                    
                    echo "entrou no case 2";
                    break;
                
                case 3:
                    echo "entrou no case 3";
                    break;

                case 4:
                    // *bloco de codigo* 

                    //é obrigado ter o break depois, se nao tiver, ele vai executar tudo ate encontrar um break. e se mesmo assim nao encontrar, vai executar tambem o default;
                    
                default:
                    // o default é opcional. É um bloco de codigo padrao, caso nenhum case seja satisfeito;       
                    echo "default";
                }

        ?>

    </body>

</html>