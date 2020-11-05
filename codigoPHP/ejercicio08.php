<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 08 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   8. Mostrar la dirección IP del equipo desde el que estás accediendo.

        */
            
            echo "<p>Direccion IP de equipo con 'REMOTE_ADDR'".$_SERVER['REMOTE_ADDR']."</p>"; // REMOTE_ADDR -> La dirección IP desde la que el usuario está viendo la página actual.
            
            
        ?> 
    </body>
</html>

