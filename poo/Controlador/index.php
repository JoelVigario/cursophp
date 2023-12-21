<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Controlador</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once './ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->getVolume();
            $c->abrirMenu();
        ?>
    </body>
</html>


