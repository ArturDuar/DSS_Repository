<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificando Carácteres</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>
        <h1>Clasificador de carácteres</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="caracter">Ingrese UN carácter cualquiera</label>
            <input type="text" name="caracter" maxlength="1" required id="caracter"/>
            <input type="submit" value="Evaluar"/>
        </form>

        <?php
        if(isset($_POST['caracter'])){
            $caracter = isset($_POST['caracter']) ? $_POST['caracter'] : 0;
            switch (true) {
                case ctype_digit($caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es un número</h5>";
                    break;
        
                case preg_match('/^[aeiou]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una vocal minúscula</h5>";
                    break;
        
                case preg_match('/^[AEIOU]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una vocal mayúscula</h5>";
                    break;
        
                case preg_match('/^[áéíóú]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una vocal minúscula acentuada</h5>";
                    break;
        
                case preg_match('/^[ÁÉÍÓÚ]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una vocal mayúscula acentuada</h5>";
                    break;
        
                case preg_match('/^[b-df-hj-np-tv-z]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una consonante minúscula</h5>";
                    break;

                case preg_match('/^[B-DF-HJ-NP-TV-Z]$/u', $caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es una consonante mayúscula</h5>";
                    break;

                case ctype_punct($caracter):
                    echo "<h5>El carácter ingresado: ($caracter) es un símbolo</h5>";
                    break;

                default:
                    echo "<h5>El carácter ingresado: ($caracter) no se puede procesar</h5>";   
                    break;
                }
        }
            
        ?>

    </div>
</body>

</html>