<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caderno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cadernos</h1>
        <!--<ul>
            
        </ul>-->

        <form action="controle" method="post">
            <textarea name="pagina" id="pagina" cols="30" rows="10" >
                <?php 
                    echo $_SESSION['cadernos'][0]->nome;
                ?>
            </textarea>
            <input type="submit" value="guardar"  class="button">
        </form>
    </main>
</body>
</html>