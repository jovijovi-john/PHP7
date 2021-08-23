**Autenticação de Usuários**

# header("Location: endereco.html/php?parametro1=value1");
    -> Serve para redirecionar o usuario para determinada url

# isset();
    -> Verifica se determinado índice de um determinado array está setado. Com isso, podemos verificar a existencia desse índice antes mesmo de tentar utiliza-lo

exemplos:

    <?php

        if (isset($_GET["login"]) && $_GET["login"] == "erro"){
    ?>

    TUDO QUE ESTIVER ENTRE ABRE E FECHA CHAVES, MESMO SE NÃO ESTIVER DENTRO DO BLOCO PHP, SO VAI EXECUTAR CASO A CONDIÇÃO SEJA SATISFEITA

    VEJA Q O IF COMEÇOU NAQUELE PRIMEIRO BLOCO, E SO TERMINOU EM OUTRO BLOCO. ISSO PORQUE VAMOS CODIFICAR HTML ENTRE ESSES BLOCOS, E ASSIM FICARÁ MAIS FACIL DE ENTENDER O CÓDIGO.
    
    <?php 
    
        }

    ?>