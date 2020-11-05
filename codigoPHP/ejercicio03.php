<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 06/10/2020
         *   03. Mostrar en tu página index la fecha y hora actual formateada en castellano.
        */ 
            // Se necesita instalar el paquete del idioma español en el servidor para la fecha salga en castellano
            setlocale(LC_ALL, "es_ES.utf-8"); // Ponemos el idioma de la fecha a español
            date_default_timezone_set("Europe/Madrid"); //Ponemos la zona horaria española por defecto
            
            $oFechaHora= new DateTime(); //Declaro un objeto de la clase DateTime
            
             
            echo "<p>Fecha y hora formateada de España -> " . $oFechaHora->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año horas:minutos:segundos
            
            echo "<p>Fecha y hora local usando strftime() -> ". strftime("%A %e %B %Y , %T") . "</p>"; //strftime() nos permite formatear la fecha con la zona horaria local
            
            echo "<p>TimeStamp -> ".$oFechaHora->setTimestamp(0) . "</p>"; //El timestamp es el numeros y segundos que han pasado desde el segundo 0 de enero de 1970 hasta la actualidad
            
            
            echo "<p>Fecha y hora formateada de Londres -> " . $oFechaHora->setTimezone(new DateTimeZone("Europe/London"))->format('d-m-Y H:i:s'). "</p>";
            
            
        ?> 
    </body>
</html>

