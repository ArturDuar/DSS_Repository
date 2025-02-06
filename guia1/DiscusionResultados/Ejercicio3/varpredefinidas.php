<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables predefinidas</title>
    <link rel="stylesheet" href="css/predefinidas.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>

<body>
    <?php
    echo "<div id=\"contenedor\">\n";
    echo "<header>\n";
    echo "\t<h1>Variables predefinidas - Matrices superglobales</h1>\n";
    echo "\t<img src=\"img/bg-header.png\" alt=\"Variables predefinidas\" title=\"Variables predefinidas\"\n";
    echo "</header>\n";
    echo "<section>\n";
    echo "<article>\n";
    echo "\t<p>En esta página se ilustrará cómo se utilizan algunas variables predefinidas\n";
    echo "\ten el lenguaje PHP. Estas variables están disponibles para cualquier script\n";
    echo "\tque se ejecute y las utilice.</p>\n";
    echo "\t<p>El valor de estas variables dependerá del servidor sobre el que se ejecuten, \n";
    echo "\tde la versión de este y de la configuración que tenga.</p>\n";
    echo "<h3>Ejemplos de utilización:</h3>\n";
    echo "<ul>\n<li>El nombre del servidor donde se está ejecutando este script es: <b><i>\$_Server['SERVER_NAME'] = " . $_SERVER['SERVER_NAME'] ."</i></b></li>\n" ;
    echo "<li>El directorio raíz de documentos en el servidor web es: <b><i>\$_SERVER['DOCUMENT_ROOT'] = " . $_SERVER['DOCUMENT_ROOT'] . "</i></b></li>\n";
    echo "<li>El software que está utilizando es: <b><i>\$_SERVER['SERVER_SOFTWARE'] = ".  $_SERVER['SERVER_SOFTWARE'] . "</i></b></li>\n";
    echo "<li>El protocolo que se está utilizando para ver esta página es: <b><i>\$_SERVER['SERVER_PROTOCOL'] = ".$_SERVER['SERVER_PROTOCOL']."</i></b></li>\n";
    echo "<li>El puerto de la máquina usado por el servidor web para la comunicación HTTP es: <b><i>\$_SERVER['SERVER_PORT'] = ".$_SERVER['SERVER_PORT']."</i></b></li>\n";
    echo "<li>La dirección IP de su computadora es: <b><i>\$_SERVER['REMOTE_ADDR'] = ".$_SERVER['REMOTE_ADDR']."</i></b></li>\n";
    echo "<li>La ruta del script actual en el servidor es: <b><i>\$_SERVER['SCRIPT_NAME'] = ".$_SERVER['SCRIPT_NAME']."</i></b></li>\n";
    echo "<li>La ruta absoluta del script que se está ejecutando actualmente: <b><i>\$_SERVER['SCRIPT_FILENAME'] = ". $_SERVER['SCRIPT_FILENAME']."</i></b></li>\n";
    //Determinando si el valor de esta variable está vacío o no
    $query_string = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : "(No existe)";
    echo "<li>La cadena de consulta de la petición de la página (si existe) es: <b><i>\$_SERVER['QUERY_STRING'] = ". $query_string . "</i></b></li>\n";
    echo "<li>La URI que se empleó para acceder a la página es: <b><i>\$_SERVER['REQUEST_URI'] = ". $_SERVER['REQUEST_URI']."</i></b></li>\n";
    echo "<li>El puerto empleado por el equipo del usuario para comunicarse con el servidor es: <b><i>\$_SERVER['REMOTE_PORT'] = ".$_SERVER['REMOTE_PORT']."</i></b></li>\n";
    echo "<li>El idioma definido por el navegador de tu computadora es: <b><i>\$_SERVER['HTTP_ACCEPT_LANGUAGE'] = ".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</i></b></li>\n";
    echo "<li>Estás viendo esta página en un navegador: <b><i>\$_SERVER['HTTP_USER_AGENT'] = ".$_SERVER['HTTP_USER_AGENT']."</i></b></li>\n";
    echo "<li>El puerto de comunicación con el servidor de la computadora que estás utilizando es: <b><i>\$_SERVER['REMOTE_PORT'] = ".$_SERVER['REMOTE_PORT']."</i></b></li>\n";
    echo "<li>La ubicación y el nombre del archivo que contiene el script que estás ejecutando es: <b><i>\$_SERVER['PHP_SELF'] = ".$_SERVER['PHP_SELF']."</i></b></li>\n</ul>";
    echo "</article>\n";
    echo "</section>\n";
    echo "</div>\n";

    ?>
</body>

</html>