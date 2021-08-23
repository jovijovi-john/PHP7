**Protegendo páginas restritas com SESSION**

    -> Antes de qualquer instrução php, é importante executar a função session_start();
        * o importante de verdade mesmo, é ficar antes de qualquer output de dados, como por exemplo, o echo.
  
    -> Ao iniciar uma seção, temos acesso a uma super global chamada $_SESSION
        ->> a SESSION é um array
        ->> a informação de seção fica disponível para todos os demais scripts que estão sendo acessados naquela 
            instancia da aplicação
        ->> por mais que essa seção tenha sido criada em valida_login, poderiamos, por exemplo, acessá-la 
            tranquilamente no script home.php.
        ->> se houver uma nova instância da aplicação, ele não compartilha os valores da outra.
        ->> no console, acesse a guia aplication, va em cookie. Esse cookie gerado é uma identificação única para 
            aquele navegador
        ->> cada seção em PHP dura por default, 3 horas. Ou seja, mesmo se fechar o navegador e abrir novamente, 
            só depois de 3 horas essas informações da seção serão perdidas.
        ->> cada instância de navegador tem seu respectivo id atributo.
            experimente acessar pela guia anônima.