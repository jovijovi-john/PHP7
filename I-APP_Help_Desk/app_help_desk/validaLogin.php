<?php
    session_start();

    $usuario_autenticado = false;

    $usuarios_app = array(
        array("email" => "adm@test.com.br", "senha" => "123456"),
        array("email" => "user@test.com.br", "senha" => "abcdef"),
        array("email" => "jovi@test.com.br", "senha" => "jovijovijovi"),
    );

    echo "<pre>";
 
    foreach($usuarios_app as $user){
        
        echo "Usuário app: ".$user["email"]." / ".$user["senha"]."<br />";
        echo "Usuário form: ".$_POST["email"]." / ".$_POST["password"];
        echo "<hr />"; 

        if ($user["email"] == $_POST["email"] && $user["senha"] == $_POST["password"]) {
            $usuario_autenticado = true;
            break;
        }   
    }

    if ($usuario_autenticado){
        $_SESSION["autenticado"] = 'SIM';
        $_SESSION["x"] = 'valor de x';
        $_SESSION["y"] = 'valor de y';
        header("Location: home.php");
    } else {
        $_SESSION["autenticado"] = 'NAO';
        header("Location: index.php?login=erro");
    }
    
    echo "</pre>";


?>