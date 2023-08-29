<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>

        <p>
            <?php
                $val_kz = $_POST["val_kz"] ?? "vazio";

                if ($val_kz == "vazio") {
                    echo "Nenhum valor foi incerido no formulário!";
                } else {
                    /* 
                        number_format($val_kz, 2, ",", " ")

                        numfmt_create("pt_PT", NumberFormatter::CURRENCY)

                        numfmt_format_currency(padrao, valor, país)
                    */

                    $padrão = numfmt_create("pt_PT", NumberFormatter::CURRENCY);

                    printf("Seus %s equivalem a %s", numfmt_format_currency($padrão, $val_kz, "AOA"), numfmt_format_currency($padrão, $val_kz / 600, "USD"));

                }
            ?>
        </p>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>