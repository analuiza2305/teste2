<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "alb.webdesigner@gmail.com";
    $assunto ="contato-alb";

    $corpo = "nome: ".$nome."\n"."email: ".$email."\n"."telefone: ".$telefone."\n"."mensagem: ".$mensagem;

    $cabeca = "from: bertarellianaluiza@gmail.com"."\n"."reply-to:".$email."\n"."X-Mailer:PHP/".phpversion();


    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!!");
    }else{
        echo("Houve um erro ao enviar o email!")
    }
?>