<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e  contantes</title>
    <style>
        body {
            font: normal 1.3em Arial;
        }
    </style>
</head>
<body>
    <h1>Variaveis e constantes em php</h1>
    <?php 
        $nome = "João";
        $sobrenome = " da Silva";
        const PAIS = "Angola";
        /*
         * const - contante
         *   $   - variável 
         */

        echo "<p>Muito prazer $nome $sobrenome! Natural de " . PAIS . " \u{1f604}</p>";
    ?>
</body>
</html>