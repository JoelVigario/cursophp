<!doctype html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banco</title>
        
    </head>
    <body>
        <pre>
            <?php 
                require_once './ContaBanco.php';

                $c1 = new ContaBanco("Vasco");
                print $c1->abrirConta("cp") . "<br>";
                print $c1->depositar(1000) . "<br>";
                print $c1->levantar(200) . "<br>";
                print $c1->fecharConta() . "<br>";
                
                print_r($c1);
            ?>
        </pre>
    </body>
</html>

