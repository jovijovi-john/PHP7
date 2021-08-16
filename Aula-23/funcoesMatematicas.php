<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 23 - Functions para tarefas matemáticas </title>

    </head>

    <body>

        <?php 
        
            /*
            
                * ceil($numero);
                    ->  Arredonda o valor para cima
                
                *floor($numero);
                    ->  Arredonda o valor para baixo
                
                *round($numero);
                    ->  Arredonda o valor com base nas casas decimais, se for menor q 5, vai arredondar pra baixo
                        se for maior ou igual q 5, o arredondamento é pra cima.
                
                *rand($numero);
                    ->  Gera um número aleatório; pode ser rand(min, max), INCLUINDO OS EXTREMOS
                        ? se nao for passado um parâmetro, ele vai gerar um valor entre 0 e randmax
                        ? para saber qual o randmax, use a função getrandmax(); obs: aqui deu: 2147483647
                
                *sqrt($numero);
                    ->  Retorna a raiz quadrada
                
               
                */
                
                $num = 7.3;
                $num2 = 7.8873;
                echo ("$num, ceil($num) == ").ceil($num).("<br/>");
                echo ("$num, floor($num) == ").floor($num).("<br/>");
                echo "getrandmax(): ".(getrandmax()."<br/>");
                echo "rand(): ".(rand())."<br/>";
                echo "rand(10, 15): ".(rand(10, 15))."<br/>";
                echo ("$num2, round($num2) == ").round($num2).("<br/>");
                echo ("$num, sqrt($num) == ").sqrt($num).("<br/>");

        ?>
    
    </body>

</html>