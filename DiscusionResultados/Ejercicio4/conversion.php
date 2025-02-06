<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }

    td, th{
        border: 1px solid darkred;
        padding: 20px;
    }

    th{
        background-color: darkred;
        color: white;
    }

    h1{
        color: darkred;
        text-align: center;
    }

    section{
        display: flex;
        flex-direction: column ;
        align-items: center;
    }

</style>
<body>
    <main>
        <section>
            <h1>Resultados</h1>
            <?php

            $dolar = isset($_POST['dolar']) ? floatval($_POST['dolar']) : 0;
            $euro = $dolar * 0.96;

            $resultado = <<<Resultados
            <table>
                <tr>
                    <th>Valor ingresado en dólares</th>
                    <th>Valor en euros</th>
                </tr>
                <tr>
                    <td>$$dolar</td>
                    <td>€$euro</td>
                </tr>
            </table>
            Resultados;

            echo $resultado;
            ?>
        </section>
    </main>
</body>
</html>