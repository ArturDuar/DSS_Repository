<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora para calcular el CUM</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Calculadora de CUM</h1>
    </header>
    <main>
        <section>
            <h4>Ingrese sus notas</h4>
            <form action="resultadoscum.php" method="post" name="calculadora" id="calculadora">
                <div>
                    <label for="estudiante">Nombre del estudiante: </label>
                    <input type="text" name="estudiante" required>
                </div>
                <?php
                for ($i = 1; $i <= 5; $i++) {

                echo "  
                <div>
                    <label for='materia$i'>Materia $i: </label>
                    <input type='text' name='materias[]' required>
                    <label for='nota$i'>Nota materia $i: </label>
                    <input type='number' name='notas[]' max='10' min='0' required step='0.01'>
                </div>";

                }
                ?>
                <div>
                    <input type="submit" value="Enviar" name="enviar" id="enviar">
                    <input type="reset" value="Limpiar">
                </div>
            </form>
        </section>
    </main>

</body>

</html>