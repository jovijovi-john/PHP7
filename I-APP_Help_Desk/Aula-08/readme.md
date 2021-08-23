## Encerrando a sessão (logoff)
    
    // remover indices do array de sessão

        -> unset(array[indice]) (serve pra remover o indice de qualquer array)
        -> se eu remover um indice do array e depois tentar removê-lo novamente, o unset tem a inteligencia de entender que aquele indice já não existe mais, e não aponta um erro.

    // destruir a variável de sessão (remover todos os índices ao mesmo tempo)

        ->  session_destroy()
        ->  somente depois de uma próxima requisição é que não teremos mais acesso às variáveis de sessão
        ->  em outras palavras, apenas após realizarmos uma nova requisição poderemos ver os resultados do 
            session_destroy()
        ->  por isso é muito comum APÓS O session_destroy() REALIZAR UM REDIRECIONAMENTO, pois isso forçará uma 
            nova requisição, e assim as variáveis de sessão não estarão mais disponíveis

        ex:

            session_start();
            $_SESSION = ["x"=>"valor de x", "y"=>"valor de y"]
            session_destroy()

            print_r($_SESSION);
            vai printar a sessão normalmente, pois so na proxima requisição é que o acesso a essas variáveis não estará mais disponível 

    // lembrando que sempre que formos trabalhar com sessão, devemos usar a session_start()