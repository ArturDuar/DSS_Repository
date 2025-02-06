<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre del Servidor y ruta del script</title>
</head>
<body>
    <style>
        h3{
            font-family:'Courier New', Courier, monospace;
            text-align: center;
        }

    </style>
    <main>
        <section>
            <h4 style="text-align: center; padding: 10px;">Dirección completa de este script</h4>
            <?php
                $server_nombre = $_SERVER['SERVER_NAME'];
                $server_ruta = $_SERVER['REQUEST_URI'];
                $url_completa = $server_nombre . $server_ruta;

                echo "<h3>" . $url_completa . "</h3>";
            ?>
        </section>
    </main>
</body>
</html>