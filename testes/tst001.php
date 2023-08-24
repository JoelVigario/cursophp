<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="estilo/style.css" media="all">
</head>
<body>
    <h1>Testes em PHP - idade</h1>

    <!-- Começa aqui o PHP -->
    <?php 
        date_default_timezone_set("Africa/Luanda");
        $ano_nasc = 2004;
        $ano_act = (int) date('Y');

        print "<p>Quem nasceu em $ano_nasc tem " . $ano_act - $ano_nasc . " anos em $ano_act</p>";

        class teste {
            private string $nome;

            function teste(string $nome) {
                $this -> $nome = $nome;
            }

            public function getNome() {
                return "nome";
            }
        }

        $pessoa = new teste("Nelson");
        echo  $pessoa -> getNome() . "<br>";
        
        echo var_dump(new teste("Amor"));


        // repetição com for
        for ($i = 400; $i <= 410; $i++) 
            // uso de formatação de string
            printf("<p>este %d é um valor formatado</p>", $i);

    ?>






    <!--<textarea name="teste" id="teste" cols="30" rows="10">
<?= <<< TESTE
        Estamos no ano $ano_act,
            Aproveitando estudar
            enquanto há tempo. \u{1f430}
        TESTE 
?>
    </textarea>-->
</body>
</html>