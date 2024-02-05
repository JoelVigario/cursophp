<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testes</title>
        <style>
            * {
                font-family: Arial;
            } a {
                display: block;
                text-decoration: none;
                color: #f9f;
                text-align: center;
                background-color: black;
                padding: 5px;
                border-radius: 5px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <a href="testes.php">Buscar Resultado</a>
        
        <pre>
            <?php
                session_start();
                if (isset($_SESSION['res'])) print_r($_SESSION['res']);
            ?>
        </pre>
    </body>
</html>
