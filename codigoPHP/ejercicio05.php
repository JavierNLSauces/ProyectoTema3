<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 05 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   05. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)

        */ 
            date_default_timezone_set("Europe/Madrid"); //Ponemos la zona horaria de España por defecto
            
            $oFechaHora= new DateTime(); //Declaro un objeto de la clase DateTime
            $oFechaHora->setDate(1942, 10, 12);
            
            echo "<p>Fecha formateada del descubrimiento de America -> ". $oFechaHora->format('d-m-Y'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año
            
            echo "<p>Timestamp del descubrimiento de América -> ". $oFechaHora->getTimestamp() . "</p>"; // Muestro el timestamp del descubrimiento de America.
            
            $oFechaHora->setTimestamp(-15059565819);// Estblezco el timestamp del descubrimiento de America
            
            echo "<p>Fecha formateada del descubrimiento de America (asignandole el Timestamp) -> ". $oFechaHora->format('d-m-Y'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año
            
            
            
        ?> 
    </body>
</html>

