<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Caderno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Novo Caderno</h1>
        <form action="controle.php" method="post">
            <label for="nome">Que nome quer dar a esse caderno:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="totPaginas">Qual é o total de páginas?</label>
            <input type="number" name="totPaginas" id="totPaginas" required min="1">
            <button>Criar</button>
        </form>
        <p><?php
            echo $_SESSION['res'];
        ?></p>
    </main>
</body>
</html>