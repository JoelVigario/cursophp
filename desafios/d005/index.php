<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <?php 
            $_val = $_POST['val'] ?? 0;
            $_div = $_POST['div'] ?? 1;
            $_quo = intdiv($_val, $_div);
            $_res = $_val % $_div;
        ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="val">Dividendo:</label>
            <input type="number" name="val" id="val" min="0" value="<?= $_val?>">
            <label for="div">Divisor:</label>
            <input type="number" name="div" id="div" min="1" value="<?= $_div?>">
            <input type="submit" value="Analizar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão</h2>

        <table class="divisao">
            <tr>
                <td><?= $_val?></td>
                <td><?= $_div?></td>
            </tr>
            <tr>
                <td><?= $_res?></td>
                <td><?= $_quo?></td>
            </tr>
        </table>
    </section>
</body>
</html>