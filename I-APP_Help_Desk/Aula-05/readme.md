**Incluindo scripts com include, include_once, require, require_once**

    ->  Incluindo scripts dentro de outros scripts
    ->  Reaproveitamento de código
    ->  Traz mais segurança
    ->  Esses métodos são construtores, logo podem ser usados com a sintaxe de função

# include("script que queremos incluir");

    ->  Quando um erro acontece no include, como por exemplo, o script não foi encontrado, o script vai apenas
        retornar um warning. Ou seja, o resto (após o warning) vai continuar executando normalmente.

# require("script que queremos incluir");

    ->  Quando um erro acontece no require, como por exemplo, o script não foi encontrado, o script vai apenas
        retornar um fatal error. Ou seja, vai parar automaticamente a execução do script.

# include_once e require_once

    ->  Só da pra incluir uma vez o script na pagina, se for usar include_once/require_once.

        1º caso:
            require_once("script.php");
            ...codigo...
            require_once("script.php");
            require_once("script.php");
            require_once("script.php");

            nesse caso, nao vai executar todos os proximos require_once

        2º caso:

            require_once("script.php");
            ...codigo...
            include_once("script.php");
            include_once("script.php");
            require_once("script.php");

            nesse caso, nao vai executar todos os proximos require_once e include_once

        3º caso:

            require_once("script.php");

            ...codigo...codigo..

            include("script.php");
            require("script.php");

            nesse caso, os proximos include e require vao executar normalmente, pois não sao require_once e include_once.