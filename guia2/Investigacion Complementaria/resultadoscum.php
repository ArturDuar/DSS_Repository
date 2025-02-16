<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | Calculadora para calcular el CUM</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Resultados</h1>
    </header>
    <main>
        <section>
            <?php
            if (isset($_POST['enviar'])) {
                $estudiante = $_POST['estudiante'];
                $notas = $_POST['notas'];

                $suma = 0;

                foreach ($notas as $nota) {
                    $suma += $nota;
                }

                $cum = $suma / count($notas);

                echo "<h5>Su CUM es de: $cum</h5>";

                $uv = 0;
                switch (true) {
                    case ($cum >= 7.5):
                        $uv = 32;
                        break;
                    case ($cum >= 7 && $cum < 7.5):
                        $uv = 24;
                        break;
                    case ($cum >= 6 && $cum < 7):
                        $uv = 20;
                        break;
                    case ($cum < 6):
                        $uv = 16;
                        break;
                }
                echo "<h5>Por lo tanto, puede inscribir un máximo de : $uv unidades valorativas</h5>";
            }
            ?>
            <form action="calculadoracum.php">
                <div>
                    <input type="submit" value="Regresar al formulario">
                </div>
            </form>
        </section>
    </main>

</body>

</html>