<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 09 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   9. Mostrar el path donde se encuentra el fichero que se está ejecutando

        */
            // 
            echo "<p>Path del fichero que se esta ejecutand con 'SCRIPT_NAME' -> ".$_SERVER['SCRIPT_NAME']."</p>"; // SCRIPT_FILENAME -> El nombre de ruta absoluto del script que se está ejecutando actualmente.
            echo "<p>Path del fichero que se esta ejecutando  con 'PHP_SELF' - >".$_SERVER['PHP_SELF']."</p>"; // SCRIPT_NAME -> Contiene la ruta del script actual. Esto es útil para páginas que necesitan apuntar a sí mismas. La constante __FILE__ contiene la ruta completa y el nombre de archivo del archivo actual (es decir, incluido).
            
            
        ?> 
    </body>
</html>

