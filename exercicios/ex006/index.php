<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_val1 = $_POST['v1'] ?? 0;
        $_val2 = $_POST['v2'] ?? 0;
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $_val1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $_val2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            printf("A soma entre $_val1 e $_val2 é <strong>igual a %d</strong>", $_val1 + $_val2)
        ?>
    </section>
</body>
</html>