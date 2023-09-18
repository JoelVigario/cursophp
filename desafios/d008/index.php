<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <?php 
        $val1 = $_POST['val1'] ?? 0;
        $peso1 = $_POST['peso1'] ?? 1;
        $val2 = $_POST['val2'] ?? 0;
        $peso2 = $_POST['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritmeticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="val1">1º Valor:</label>
            <input type="number" name="val1" id="val1" step=".01" required value="<?= $val1?>">

            <label for="peso1">Peso:</label>
            <input type="number" name="peso1" id="peso1" step=".01" required min="1" value="<?= $peso1?>">

            <label for="val2">2º Valor:</label>
            <input type="number" name="val2" id="val2" step=".01" required value="<?= $val2?>">

            <label for="peso2">Peso:</label>
            <input type="number" name="peso2" id="peso2" required min="1" value="<?= $peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>

        <?php 
            $ma = ($val1 + $val2) / 2;
            $mp = ($val1 * $peso1 + $val2 * $peso2) / ($peso1 + $peso2);

            echo "
                <p>Analisando os valores <strong>$val1</strong> e <strong>$val2</strong></p>
                <ul>
                    <li>A <strong>Média Aritmética simples</strong> entre os valores será <strong>".  number_format($ma, 2, ",", " ") ."</strong></li>
                    <li>A <strong>Média Aritmética Ponderada</strong> entre os valores é <strong>$mp</strong></li>
                </ul>
            ";
        ?>

    </section>
</body>
</html>