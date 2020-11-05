<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).

        */
            // $GLOBALS : Hace referencia a todas las variables disponibles en el ámbito global
            // $ _SERVER - Información del entorno de ejecución y del servidor
            // $ _SERVER - Información del entorno de ejecución y del servidor
            // $ _POST - Variables HTTP POST
            // $ _FILES - Variables de carga de archivos HTTP
            // $ _COOKIE - Cookies HTTP
            // $ _SESSION - Variables de sesión
            // $ _REQUEST - Variables de solicitud HTTP
            // $ _ENV - Variables de entorno
        
        
            echo "<h2>Muesta de variables globales con print_r</h2>";
            echo "<pre>";
            echo "<h3>GLOBALS</h3>";
            print_r ($GLOBALS);
            echo "<h3>_SERVER</h3>";
            print_r ($_SERVER);
            echo "<h3>_GET</h3>";
            print_r ($_GET);
            echo "<h3>_POST</h3>";
            print_r ($_POST);
            echo "<h3>_FILES</h3>";
            print_r ($_FILES);
            echo "<h3>_COOKIE</h3>";
            print_r ($_COOKIE);
            echo "<h3>_SESSION</h3>";
            print_r ($_SESSION);
            echo "<h3>_REQUEST</h3>";
            print_r ($_REQUEST);
            echo "<h3>_ENV</h3>";
            print_r ($_ENV);
            echo "</pre>";
            
            
            echo "<h2>Muesta de variables globales con foreach()</h2>";
            echo "<pre>";
            echo "<h3>GLOBALS</h3>";
            foreach ($GLOBALS as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_SERVER</h3>";
            foreach ($_SERVER as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_GET</h3>";
            foreach ($_GET as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_POST</h3>";
            foreach ($_POST as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_FILES</h3>";
            foreach ($_FILES as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_COOKIE</h3>";
            foreach ($_COOKIE as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_SESSION</h3>";
            foreach ($_SESSION as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_REQUEST</h3>";
            foreach ($_REQUEST as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "<h3>_ENV</h3>";
            foreach ($_ENV as $clave => $valor) {
                echo "\t [{$clave}] => {$valor} <br>";
            }
            echo "</pre>";
            
            
        ?> 
    </body>
</html>

