# Métodos GET e Post

    * - Inclui no formulário (form) o *atributo action* que é o destino do submit de um formulario
    * - _Ver depois (Comunicaçao CGI)_
    * - Precisamos do atributo *name* nos inputs se quisermos passá-los para o php
    * - Por padrão, o método de envio de formularios é o *get*
    * - As informações passadas no formulario pelo get, se transformam em parâmetros na url
    * - Para recuperar os dados enviados pelo get, use a super global **$_GET**
    * - **$_GET** é um array, cujo qual cada parâmetro é um índice desse array

# Importante: 
    * - A resposta dada pelo servidor, não é o script validaLogin, mas sim o resultado da interpretação desse script

# Método Post
    * - Use o atributo "method" no form para definir o tipo de método a ser usado.
    * - Para ver os dados enviados via post, abra as ferramentas de desenvolvedor, depois network, depois clique no arquivo de resposta e clique em headers. La terá um Form Data que conterá os dados.
    * - Para recuperar os dados enviados pelo ´pst, use a super global **$_POST**