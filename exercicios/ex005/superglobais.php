<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia_da_semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Super Global Get</h1>";
                var_dump($_GET);

                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                echo "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Super Global COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Super Global SERVER</h1>";
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>