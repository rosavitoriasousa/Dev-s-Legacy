<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['mensagem']);

    $para = "andrielyaparecida2005@gmail.com";
    $assunto = "Email de entrar em contato";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."mensagem: ".$mensagem;

    $cabeca = "From:andrielyaparecida2005@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>