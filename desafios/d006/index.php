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
        $_sal = $_POST['sal'] ?? 0;
        $padrão = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
        $_min = 1380.00;

        $res = "Quem recebe um salário de " . numfmt_format_currency($padrão, $_sal, "AOA") . " ganha <strong>" . (intdiv($_sal, $_min)) . " salários mínimos</strong> + " . numfmt_format_currency($padrão, $_sal % $_min, "AOA") . "";
    ?>

    <main>
        <h1>Informe seu Salário</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (Kz):</label>
            <input type="number" name="sal" id="sal" min="0" step=".01" required value="<?= $_sal?>">
            <p>Considere o Salário mínimo de <strong><?= numfmt_format_currency($padrão, $_min, "AOA")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <p><?= $res?></p>
    </section>
</body>
</html>