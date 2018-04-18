<?php

    # remove a sessão "logado"
    session_unset($_SESSION['logado']);
    
    # remove a atribuição da sessão "logado"
    unset($_SESSION['logado']);
    
    # destroi todas as sessões
    session_destroy();
    
    # redireciona para a página index
    header("Location: ../index.php");
    
    # finaliza o arquivo
    die();

