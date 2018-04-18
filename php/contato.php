<?php

    require_once './crud_contato.php';

    #$nome = $_POST['name'];
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    session_start();
    
    if(setContato($nome, $email, $msg)) {
        $_SESSION['msg_success'] = "Mensagem enviada com sucesso.";
        header("Location: ../index.php#contact");
        die();
    } else {
        $_SESSION['msg_fail'] = "Falha ao enviar a mensagem!";
        header("Location: ../index.php#contact");
        die();
    }