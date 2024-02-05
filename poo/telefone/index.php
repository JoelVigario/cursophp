<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telefone</title>
        <style>
            body {
                font-family: Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Telefone</h1>
        
        <pre>
            <?php
                require_once './Telefone.php';
                require_once './PlacaTelefone.php';
                require_once './Ligacao.php';

                $t[0] = new PlacaTelefone("9220");
                $t[0]->ligar();
                $t[0]->telefonarPara("Tia");
                $t[0]->chamar();
                $t[0]->terminarChammada();
                $t[0]->chamar();
                $t[0]->atender();
                $t[0]->mudarSomPara("vibrador");
                $t[0]->carregar();
                $t[0]->ligar();
                $t[1] = new PlacaTelefone("9304");
                $t[1]->ligar();
                $lg = new Ligacao($t[0], $t[1]);
                $lg->ligar();
                $lg->terminarLigacao();
                
                
                print '<br><br>';
                print_r($t)
                
            ?>
        </pre>
    </body>
</html>

