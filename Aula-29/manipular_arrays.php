<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 29 - Funções Nativas para manipulação de arrays</title>

    </head>

    <body>

        <?php 
            
            /*
                *  =>  is_array(array)
                        Verifica se o parametro é um array

                *  =>  array_keys(array)
                        Retorna todas as chaves(keys/indices) de um array

                *  =>  sort(array) -> retorna true ou false
                        Ordena um array e reajusta seus índices. A ordenação é feita no proprio array que foi passado
                
                *  =>  asort(array)
                        Ordena um array preservando seus índices
                
                *  =>  count(array)
                        Conta a quantidade de elementos de um array
                
                *  =>  array_merge(array)
                        Funde um ou mais arrays
                
                *  =>  explode(array)
                        Divide uma string baseado num delimitador
                
                *  =>  implode(array)
                        Justa elementos de um array em uma string
            */

            /*   
                ? is_array
                $array = 'String';
                $retorno = is_array($array);

                echo $retorno ? "É array <br/>" : "Não é array <br/>"
            */

            /*
                ?array_keys     
                $array = ["nome" => "john", "sobrenome" => "victor", "idade" => 19];
                echo "<pre>";
                print_r($array);
                echo "</pre>";
                
                $chaves_array = array_keys($array);
                echo "<pre>";
                print_r($chaves_array);
                echo "</pre>";
            */

            /*
                ?sort
        
                $array_compras = ["notebook", "placa de video", "mesa digitalizadora", "monitor", "cooler", "led"];
                
                echo "<h2>Array desordenado:</h2><pre>";
                print_r($array_compras);
                echo "</pre>";

                sort($array_compras);

                echo "<h2>Array ordenado:</h2><pre>";
                print_r($array_compras);
                echo "</pre>";
            */

            /*
                ?asort
                    
                $array_compras = ["notebook", "placa de video", "mesa digitalizadora", "monitor", "cooler", "led"];
                
                echo "<h2>Array desordenado:</h2><pre>";
                print_r($array_compras);
                echo "</pre>";

                asort($array_compras);

                echo "<h2>Array ordenado:</h2><pre>";
                print_r($array_compras);
                echo "</pre>"; 
            */

            /*
                ? count
                    
                $array_compras = ["notebook", "placa de video", "mesa digitalizadora", "monitor", "cooler", "led"];
                    
                echo "<h2>Array desordenado:</h2><pre>";
                    print_r($array_compras);
                    echo "O array tem ".count($array_compras)." elementos.";
                echo "</pre>";
            */

            /*  
                ? array_merge

                $array1 = ["osx", "windows"];
                $array2 = array("linux");
                $array3 = ["solaris"];

                $novoArray = array_merge($array1, $array2, $array3);
                echo "<pre>";
                print_r($novoArray);
                echo "</pre>";
            */

            /*
                ? explode
                    
                $string = "28/07/2002";
                $array_retorno = explode("/", $string);

                echo "$string<br/><pre>";
                    print_r($array_retorno);
                echo "</pre>";
                
                echo "$array_retorno[2]-$array_retorno[1]-$array_retorno[0]";            
            */
            
            
            $array = ["28","07", "2002"];
            $stringRetorno = implode("/", $array);

            echo "<pre>";
                print_r($array);
            echo "</pre>";
            
            echo "$stringRetorno";
            


        

        ?>
    
    </body>

</html>