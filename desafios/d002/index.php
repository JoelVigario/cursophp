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
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...
            <br> 
            <?= "O número gerado foi <strong>" . mt_rand(0, 100) . "</strong> " ?>
        </p>
        
        <button onclick="javascript:location.reload()">&#x1f504; Gerar outro</button>
    </main>
</body>
</html>