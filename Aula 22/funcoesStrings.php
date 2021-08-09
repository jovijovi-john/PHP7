<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 22 - Functions para Strings </title>

    </head>

    <body>

        <?php 
        
            /*
            
                * strtolower($texto);
                    ->  Transforma todos os caracteres da string em minúsculo
                
                *strtoupper($texto);
                    ->  Transforma todos os caracteres da string em maiúsculo
                
                *ucfirst($texto); (UpperCase First)
                    ->  Transforma o primeiro caractere da string em maiúsculo
                
                *strlen($texto);
                    ->  Retorna a quantidade de caracteres da string(tamanho da string, vai contar espaços tmb)
                
                *str_replace(<procura por>, <substitui por>, $texto);
                    ->  Substitui uma cadeia de caracteres por outra dentro de uma string
                
                *substr($texto, <posicao inicial>)
                    ->  Retorna parte de uma string
            */

            $caracteres = "JOHN";
            echo "String normal: $caracteres <br/>";
            echo "strtolower() -> ".(strtolower($caracteres))."<br/><hr/>";
            
            $caracteres = "victor";
            echo "String normal: $caracteres <br/>";
            echo "strtoupper() -> ".(strtoupper($caracteres))."<br/><hr/>";
            
            $caracteres = "jovijovi";
            echo "String normal: $caracteres <br/>";
            echo "ucfirst() -> ".(ucfirst($caracteres))."<br/><hr/>";
            
            $caracteres = "JOJOVI GOSTOSO";
            echo "String normal: $caracteres <br/>";
            echo "strlen() -> ".(strlen($caracteres))."<br/><hr/>";

            $caracteres = "vivi ";
            echo "String normal: $caracteres <br/>";
            echo "ucfirst() -> ".(ucfirst($caracteres))."<br/><hr/>";
            
            $caracteres = "jojo lindo, jojo gostoso ";
            echo "String normal: $caracteres <br/>";
            echo "str_replace() -> ".(str_replace("jojo", "vivi", $caracteres))."<br/><hr/>";
           
            $caracteres = "jojo lindo, victor perfeito ";
            echo "String normal: $caracteres <br/>";
            echo "substr() -> ".(substr($caracteres, 10))."<br/><hr/>";

        ?>
    
    </body>

</html>