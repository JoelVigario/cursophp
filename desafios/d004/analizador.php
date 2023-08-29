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
        <h1>Analizador de Número Real</h1>

        <?php 
            $_num = $_POST["_num"] ?? "vazio";

            if ($_num != "vazio") {
                printf("<p>Analizando o número <strong>%s</strong> informado pelo usuário:</p>", number_format($_num, 3, ",", " "));

                echo "
                    <ul>
                        <li>A parte inteira do número é <strong>".(number_format(floor($_num), 0, ",", " "))."</strong></li> 
                        <li>A parte fracionária do número é <strong>".number_format($_num - floor($_num), 3, ",", " ")."</strong></li>
                    </ul>
                ";
            } else {
                echo "Nenhum valor foi digitado!";
            }
            
        ?>
    </main>
</body>
</html>