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
         *   @since: 08/10/2020
         *   04. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués
        */ 
            // Se necesita instalar el paquete del idioma portugues en el servidor para la fecha salga en portugues
            setlocale(LC_ALL, "pt_BR.utf-8"); // Ponemos el idioma de la fecha a portugues
            date_default_timezone_set("Europe/Lisbon"); //Ponemos la zona horaria de Portugal por defecto
            
            $oFechaHora= new DateTime(); //Declaro un objeto de la clase DateTime
            
            
            echo "<p>Fecha y hora formateada de Oporto -> " . $oFechaHora->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año horas:minutos:segundos
            
            echo "<p>Fecha y hora local usando strftime() -> ". strftime("%A %e %B %Y , %T") . "</p>"; //strftime() nos permite formatear la fecha con la zona horaria local
            
        ?> 
    </body>
</html>

