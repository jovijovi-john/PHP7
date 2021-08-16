<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 27 - Métodos de pesquisa</title>

    </head>

    <body>

        <?php 
            
            /* in_array()        
                
                -> true ou false para a existencia do que está sendo procurado */

            /* array_serach();   
                -> retorna o índice do valor no array caso ele exista. Caso contrario, retorna null*/

            $lista_frutas = ["uva", "morango", "maçã", "abacate", "maracujá", "pera", "fruto proibido"];

            echo "<pre>";
            print_r($lista_frutas);
            echo "</pre>";

            $fruta = "fruto proibido";
            $fruta2 = "fruta aleatoria";

            echo "<h1>in_array()</h1>";
            
            echo in_array($fruta, $lista_frutas) ? "$fruta está no array" : "$fruta não está no array";
            echo "<br/>";
            echo in_array($fruta2, $lista_frutas) ? "$fruta2 está no array" : "$fruta2 não está no array";
            echo "<br/>";
            
            
            echo "<h1>array_search()</h1>";

            if (array_search($fruta, $lista_frutas) != null){
                echo "$fruta está na posição ".array_search($fruta, $lista_frutas)."<br/>";
            } else {
                echo "$fruta não está no array! <br/>";
            }
            
            if (array_search($fruta2, $lista_frutas) != null){
                echo "$fruta2 está na posição ".array_search($fruta, $lista_frutas)."<br/>";
            } else {
                echo "$fruta2 não está no array! <br/>";
            }

            
            
            ?>
    
    </body>

</html>