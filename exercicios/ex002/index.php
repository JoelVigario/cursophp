<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
        date_default_timezone_set("Africa/Luanda");
    ?>

    <p>
        <?= "Hoje é dia " . date("d/M/Y") ?>
    </p>

    <p>
        <?= "São " . date("G:i:s T") ?>
    </p>
</body>
</html>