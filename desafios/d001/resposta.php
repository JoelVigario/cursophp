<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>

        <?php 
            $num = $_POST["num"]  ?? "vazio";
            if ($num != "vazio") {
                print "<p>O número escolhido foi <strong>$num</strong></p>";
                printf("<p>O seu <em>antecessor</em> é %d</p>", $num - 1);
                printf("<p>O seu <em>sucessor</em> é %d</p>", $num + 1);
            } else {
                print "<p>Nenhum valor foi recebido do formulário</p>";
            }
            
        ?>

        <button onclick="history.back()">&#x2b05; Voltar</button>
        
    </main>
</body>
</html>