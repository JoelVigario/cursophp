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
        $ano_nasc = $_POST['ano_nasc'] ?? 2000;
        $ano_act = $_POST['ano_act'] ?? date('Y');
    ?>

    <main>
        <h1>Calcule a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" min="1900" max="<?= date('Y') - 1?>" required value="<?= $ano_nasc?>">
            <label for="ano_act">Quer saber sua idade em que ano? (actualmente estamos em <strong><?= date("Y")?></strong>)</label>
            <input type="number" name="ano_act" id="ano_act" required min="<?= $ano_nasc + 1?>" value="<?= $ano_act?>">

            <input type="submit" value="Calcular Idade">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>
            <?= "Quem nasceu no ano de $ano_nasc vai ter <strong>". $ano_act - $ano_nasc ." ano(s)</strong> em $ano_act"?>
        </p>
    </section>
</body>
</html>