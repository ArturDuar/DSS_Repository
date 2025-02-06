<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    section{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    h2{
        text-align: center;
        color: darkred;
    }

    table{
        border-collapse: collapse;
        width: 50%;
    }

    td{
        border: 1px solid black;
    }

    th{
        border: 1px solid white;
        background-color: darkred;
        color: white;
    }
    td, th{
        padding: 10px;
    }
</style>
<body>
    <main>
        <section>
            <h2>Datos personales</h2>
            <?php
                $nombre = "Roberto Arturo Duarte Mejía";
                $lugarNacimiento = "Soyapango, San Salvador Este";
                $edad = "18 años";
                $carnet = "DM240115";
                $tablaInformacion = <<<TABLA
                <table>
                    <tr>
                        <th>Nombre Completo</th>
                        <td>$nombre</td>
                    </tr>
                    <tr>
                        <th>Lugar de nacimiento</th>
                        <td>$lugarNacimiento</td>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td>$edad</td>
                    </tr>
                    <tr>
                        <th>Carnet</th>
                        <td>$carnet</td>
                    </tr>
                </table>
                TABLA;

                echo $tablaInformacion;
                
            ?>
        </section>
    </main>
</body>
</html>