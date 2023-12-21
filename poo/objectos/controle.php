<?php 
    session_start();
    require_once "Caderno.php";

    if (! isset($_SESSION['cont'])) {
        $_SESSION['cont'] = 0;
    }

    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {

        if (filter_input(INPUT_POST, 'nome')) {
            $_SESSION['cadernos'][$_SESSION['cont']++] = new Caderno(filter_input(INPUT_POST, 'totPaginas'), filter_input(INPUT_POST, 'nome'));

            print_r($_SESSION['cadernos'][0]);
            $_SESSION['res'] = 'Caderno criado com sucesso!';
            header('Location: desktop.php');
        } else {

        }

    }