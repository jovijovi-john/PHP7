<html>

    <head>
        
        <meta charset="UTF-8">
        <title>
            Atividade 2 -> PHP
        </title>

    </head>

    <body>

        <?php 
        
            function calcularImposto($salario){

               
                if (1903.98 >= $salario ){
                    $impostoPago = 0;
                    echo 0;
                } elseif (2826.65 >= $salario){
                    $impostoPago = $salario * 0.075;
                    echo "7.5";
                }  elseif (3751.05 >= $salario){
                    $impostoPago = $salario * 0.15;
                    echo "15";
                } elseif (4664.68 >= $salario){
                    $impostoPago = $salario * 0.225;
                    echo "22.5";
                } else {
                    $impostoPago = $salario * 0.275;
                    echo "27.5";
                }
                
                return $impostoPago;
            }

            echo "<br/>O imposto a ser pago será: ".calcularImposto(9000);
        ?>
    
    </body>

</html>