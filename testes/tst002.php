<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURRENCY</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <?php 
        $val_kz = $_POST["val_kz"] ?? 0;
        $val_usd = $val_kz / 600;
    ?>

    <main>
        <h1>Conversor de KZ para US$</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="val_kz">Valor em Kwanza:</label>
            <input type="number" name="val_kz" id="val_kz" required step=".01" min="0" value="<?= $val_kz?>">
            <input type="submit" value="Converter">
        </form>
    </main>

    <section id="resultado">
        <h2>Valor em Dolar:</h2>
        <?php 
            $padrão = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
            printf("<strong>%s</strong> corresponde a <strong>%s</strong>", numfmt_format_currency($padrão, $val_kz, "AOA"), numfmt_format_currency($padrão, $val_usd, "USD"));
        ?>
    </section>
</body>
</html>