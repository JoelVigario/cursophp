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
        $_num = $_REQUEST['num'] ?? 0;
    ?>

    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?= $_num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            echo " 
                <p>Analizando o <strong>número $_num</strong>, temos:</p>
                <ul>
                    <li>A sua raiz quadrada é <strong>". number_format(sqrt($_num), 2, ",", " ") ."</strong></li>
                    <li>A sua raiz cúbica é <strong>". number_format($_num**(1 / 3), 2, ",", " ") ."</strong></li>
                </ul>
                ";
        ?>
    </section>
</body>
</html>