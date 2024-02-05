<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vetor</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <table>
            <tr><th scope="col">Atributo</th><th scope="col">Dado</th></tr>
            <?php 
                # carrega o arquivo json e tranforma em um array
                $dados = json_decode(file_get_contents("dados.json"), true);
                
                print "<tr><td>Nome</td><td>" . $dados['nome'] . "</td><tr>";
                print "<tr><td>Idade</td><td>" . $dados['idade'] . "</td><tr>";
                print "<tr><td>Sexo</td><td>" . $dados['sexo'] . "</td><tr>";
                print "<tr><td>Profissão</td><td>" . $dados['profissão'][0] . "</td><tr>";
                
                
//                print $dados['nome'] . '<br>';
//                print_r($dados);
            ?>
        </table>
    </body>
</html>


