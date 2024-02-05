<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Herança</title>
        <style>
            * {font-family: Arial, sans-serif}
        </style>
    </head>
    <body>
        <h1>Herança</h1>
        
        <pre>
            <?php
                require_once './Professor.php';
                
                $v = new Professor();
                $v->setNome("Pedro");
                $v->receberAumento();
                
                print '<br>';
                print_r($v)
            ?>
        </pre>
    </body>
</html>
