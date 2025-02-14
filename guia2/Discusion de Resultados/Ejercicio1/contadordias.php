<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de dias</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>
        <form name="fechanacimiento" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Contador de días desde tu nacimiento</h1>
            <h4>Ingresa tu fecha de nacimiento</h4>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required />
            <input type="submit" value="Enviar" name="enviar" id="enviar" />
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : 0;
            $fechaNacimiento = new DateTime($fecha);

            $hoy = new DateTime();

            $diferencia = $hoy->diff($fechaNacimiento);

            echo "<h3>Han pasado " . $diferencia->days . " días desde que naciste. ¡Que viejo eres!</h3>";
        }
        ?>
    </div>
</body>

</html>