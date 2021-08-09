<html>

    <head>
        
        <meta charset="UTF-8">
        <title>Aula 24 - Functions para manipulação de datas</title>

    </head>

    <body>

        <!-- php.net (docs) -->
        <?php 
        
            /*
            
                * date($formato);
                    ->  Recuperar a data atual (recebe uma string com o formato de retorno da data)
                        Veja a documentação, importante!

                        DATE:
                        
                            d-> dia do mês (01 -> 31;
                            D-> dia da semana(3 letras)
                            j-> dia do mês sem zeros;

                            m-> numero do mês (com zeros) 
                            n-> numero do mês (sem zeros) 
                            M-> representação textual curta do mês(3 letras)
                            t-> numero de dias no mês

                            y-> ano (2 digitos)
                            Y-> ano (4 digitos)

                            w-> dia da semana (0->6) (0 == domingo, 6==sabado);
                            z-> dia do ano (0->365);


                        TIME:

                            g -> (HORA)formato de 12 horas (1->12) sem zeros
                            h -> (HORA)formato de 12 horas (01->12) com zeros

                            G-> (HORA)formato de 24 horas (0->23) sem zeros
                            H-> (HORA)formato de 24 horas (00->23) com zeros

                            i-> minutos (com zeros)
                            s-> segundos (com zeros)
                            



                
                *date_default_timezone_get($timezone);
                    ->  Recuperar o timezone default da aplicação
                
                *date_default_timezone_set($timezone);
                    ->  Atualizar o timezone default da aplicação   (Pesquisar: TIMEZONE)
                
                *strtotime($data);
                    ->  Transformar datas textuais em segundos ( padrão de data americano (ano/mês/dia) )
           
                */
                



                // alterando fuso horário
                    echo date_default_timezone_get()."<br/>";
                    date_default_timezone_set('America/Sao_Paulo')."<br/>";
                    echo date_default_timezone_get()."<br/>";
                // ------------------------------------------------------------
                
                echo date("d/m/y")."<br/>";
                echo date("d/m/Y")."<br/>";
                echo date("j/m/y")."<br/>";
                echo date("D")."<br/>";
                echo date("S")."<br/>";
                echo date("l")."<br/>";
                echo date("G:i:s")."<br/>";

                // padrão de data americano (ano/mês/dia)
                // é necessário converter o formato de data do brasileiro pro americano.

                $data_inicial = "2018-04-24";
                $data_final = "2018-05-15";

                echo "data_inicial: $data_inicial <br/>";
                echo "data_final: $data_final <br/>";
                
                //  timestamp
                //  01/01/1970

                $time_inicial = strtotime($data_inicial); // em php retorna segundos (em js é ms)
                $time_final = strtotime($data_final);

                echo "data_inicial em timestamp: $time_inicial <br/>"; 
                echo "data_final em timestamp: $time_final <br/>"; 
                $dif_times = abs($time_final - $time_inicial);
                echo "A diferença entre as datas em segundos é de $dif_times <br/>";
                 
                $secs_dia = 24 * 60  * 60;
                echo "Um dia possui $secs_dia segundos <br/>";
                $dif_datas = $dif_times / $secs_dia;
                echo "A diferença entre as datas, em dias, é de $dif_datas. <br/>";

        ?>
    
    </body>

</html>