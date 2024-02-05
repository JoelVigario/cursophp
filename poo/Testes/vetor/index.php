<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vetor</title>
        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <p>
            <?php 
                require_once './IVetor.php';
                require_once './Vetor.php';
                use vetor\Vetor as vet;
                
                vet::add(30);
                vet::add(40);
                vet::insira(1, null);
                vet::insira(1, "Entrei!");
                vet::remova(0);
                
                $v = new vet;
                $v->nome = "Joice";
                $v->nome = "Paulo";
                $v->idade = 19;
                $v->sexo = 'M';
                $v->classe = 11;
                $v->curso = 'Contabilidade e Gestão';
                
                $p = clone $v;
                $p->nome = "Sebastião";
                $p->idade = 21;
                $p->curso = 'CEJ';
                
                print '<br>' . $p();
                print '<br>' . vet::toString(); 
                print vet::encontre(30);
            ?>
        </p>
    </body>
</html>


