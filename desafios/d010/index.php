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
        $preco = $_GET['preco'] ?? 0;
        $pr = $_GET['pr'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preço</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do produto: </label>
            <input type="number" name="preco" id="preco" step=".01" min="0" required value="<?= $preco?>">
            <label for="pr">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label>
            <input type="range" name="pr" id="pr" oninput="mudaP()" min="0" max="100" value="<?= $pr?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <h2>Resultado do Reajuste</h2>

        <?php 
            $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
            $valReajustado = $preco * $pr / 100 + $preco;
            echo "<p>O produto que custava ". numfmt_format_currency($padrao, $preco, "AOA") .", com <strong>$pr% de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrao, $valReajustado, "AOA") ."</strong> apartir de agora</p>";
        ?>
    </section>

    <script>
        mudaP()
        function mudaP() {
            p.innerText = pr.value
        }
    </script>
</body>
</html>