<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 07 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   07. Mostrar el nombre del fichero que se está ejecutando.

        */
            // basename() devuelve el ultimo componente de nombre de un path
            // La ruta del fichero que se esta ejecutando se guarda en la variable global $_SERVER
            
            // SCRIPT_FILENAME -> El nombre de ruta absoluto del script que se está ejecutando actualmente.
            // SCRIPT_NAME -> Contiene la ruta del script actual. Esto es útil para páginas que necesitan apuntar a sí mismas. La constante __FILE__ contiene la ruta completa y el nombre de archivo del archivo actual (es decir, incluido).
            // PHP_SELF -> El nombre de archivo del script que se está ejecutando actualmente, relativo a la raíz del documento. 
        
        
            echo "<p>Nombre del fichero que se esta mostrando con 'SCRIPT_FILENAME'-> ".$_SERVER['SCRIPT_FILENAME']."</p>"; 
            echo "<p>Nombre del fichero que se esta mostrando con 'SCRIPT_FILENAME' y basename() -> ".basename($_SERVER['SCRIPT_FILENAME'])."</p>"; 
            
            echo "<p>Nombre del fichero que se esta mostrando con 'SCRIPT_NAME' -> ".$_SERVER['SCRIPT_NAME']."</p>"; 
            echo "<p>Nombre del fichero que se esta mostrando con 'SCRIPT_NAME' y  basename() -> ".basename($_SERVER['SCRIPT_NAME'])."</p>"; 
            
            echo "<p>Nombre del fichero que se esta mostrando con 'PHP_SELF' - >".$_SERVER['PHP_SELF']."</p>"; 
            echo "<p>Nombre del fichero que se esta mostrando con 'PHP_SELF'y basename() - >".basename($_SERVER['PHP_SELF'])."</p>"; 
            
            
            
            
            
        ?> 
    </body>
</html>

