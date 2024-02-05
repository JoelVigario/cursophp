<!doctype html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YouTube</title>
    </head>
    <body>
        <h1>Youtube</h1>
        
        <pre>
            <?php 
                require_once './classes/AcoesVideo.php';
                require_once './classes/Pessoa.php';
                require_once 'classes/Video.php';
                require_once 'classes/Gafanhoto.php';
                require_once 'classes/Visualizacao.php';
                
                use classes\Video as filme;
                use classes\Gafanhoto as expectador;
                
                $v['cv'] = new filme("Bem-vindo ao Cristo Voltará!");
                $v['js'] = new filme('Aprenda json em 5 minutos');
                $g[0] = new expectador('Mario', 17, 'M', 17882);
                
                $vz = new \classes\Visualizacao($g[0], $v['cv']);
                $vz->avaliarPerc(80); 
                
                
                print_r($v['cv']);
                print_r($g[0]);
            ?>
        </pre>
    </body>
</html>

