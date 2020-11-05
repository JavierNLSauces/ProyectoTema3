<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 06 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 10/10/2020
         *   06. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días

        */
            date_default_timezone_set("Europe/Madrid"); //Ponemos la zona horaria de España por defecto.
            
            $oFechaHora = new DateTime();
            
            echo "<p>Fecha y hora formateada-> ". $oFechaHora->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año
            
            echo "<h2>Operaciones de fechas con modify()</h2>";
            
            // modify() nos permite cambiar la marca temporal de una fecha
            echo "<p>Fecha y hora formateada +1 año -> ". $oFechaHora->modify('+1 year')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 año
            echo "<p>Fecha y hora formateada -1 año -> ". $oFechaHora->modify('-1 year')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 año
            
            echo "<p>Fecha y hora formateada +60 dias -> ". $oFechaHora->modify('+60 day')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +60 dias
            echo "<p>Fecha y hora formateada -60 dias -> ". $oFechaHora->modify('-60 day')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -60 dias
            
            echo "<p>Fecha y hora formateada +1 mes -> ". $oFechaHora->modify('+1 month')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 mes
            echo "<p>Fecha y hora formateada -1 mes -> ". $oFechaHora->modify('-1 month')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 mes
            
            echo "<p>Fecha y hora formateada +1 semana -> ". $oFechaHora->modify('+1 week')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 semana
            echo "<p>Fecha y hora formateada -1 semana -> ". $oFechaHora->modify('-1 week')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 semana
            
            
            echo "<p>Fecha y hora formateada +1 dia -> ". $oFechaHora->modify('+1 day')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 dia
            echo "<p>Fecha y hora formateada -1 dia -> ". $oFechaHora->modify('-1 day')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 dia
            
            
            echo "<p>Fecha y hora formateada +1 hora -> ". $oFechaHora->modify('+1 hour')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 hora
            echo "<p>Fecha y hora formateada -1 hora -> ". $oFechaHora->modify('-1 hour')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 hora
            
            echo "<p>Fecha y hora formateada +1 minuto -> ". $oFechaHora->modify('+1 min')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 minuto
            echo "<p>Fecha y hora formateada -1 minuto -> ". $oFechaHora->modify('-1 min')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 minuto
            
            echo "<p>Fecha y hora formateada +1 segundo -> ". $oFechaHora->modify('+1 sec')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 minuto
            echo "<p>Fecha y hora formateada -1 segundo -> ". $oFechaHora->modify('-1 sec')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 minuto
            
            
            
            echo "<h2>Operaciones de fechas con add() y sub()</h2>";
            
            // modify() nos permite cambiar la marca temporal de una fecha
            echo "<p>Fecha y hora formateada +1 año -> ". $oFechaHora->add(new DateInterval('P1Y'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 año
            echo "<p>Fecha y hora formateada -1 año -> ". $oFechaHora->sub(new DateInterval('P1Y'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 año
            
            echo "<p>Fecha y hora formateada +60 dias -> ". $oFechaHora->add(new DateInterval('P60D'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +60 dias
            echo "<p>Fecha y hora formateada -60 dias -> ". $oFechaHora->sub(new DateInterval('P60D'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -60 dias
            
            echo "<p>Fecha y hora formateada +1 mes -> ". $oFechaHora->add(new DateInterval('P1M'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 mes
            echo "<p>Fecha y hora formateada -1 mes -> ". $oFechaHora->sub(new DateInterval('P1M'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 mes
            
            echo "<p>Fecha y hora formateada +1 semana -> ". $oFechaHora->add(new DateInterval('P1W'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 semana
            echo "<p>Fecha y hora formateada -1 semana -> ". $oFechaHora->sub(new DateInterval('P1W'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 semana
            
            
            echo "<p>Fecha y hora formateada +1 dia -> ". $oFechaHora->add(new DateInterval('P1D'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 dia
            echo "<p>Fecha y hora formateada -1 dia -> ". $oFechaHora->sub(new DateInterval('P1D'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 dia
            
            
            echo "<p>Fecha y hora formateada +1 hora -> ". $oFechaHora->add(new DateInterval('PT1H'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 hora
            echo "<p>Fecha y hora formateada -1 hora -> ". $oFechaHora->sub(new DateInterval('PT1H'))('-1 hour')->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 hora
            
            echo "<p>Fecha y hora formateada +1 minuto -> ". $oFechaHora->add(new DateInterval('PT1M'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 minuto
            echo "<p>Fecha y hora formateada -1 minuto -> ". $oFechaHora->sub(new DateInterval('PT1M'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 minuto
            
            echo "<p>Fecha y hora formateada +1 segundo -> ". $oFechaHora->add(new DateInterval('PT1S'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año +1 minuto
            echo "<p>Fecha y hora formateada -1 segundo -> ". $oFechaHora->sub(new DateInterval('PT1S'))->format('d-m-Y , H:i:s'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año -1 minuto
            
        ?> 
    </body>
</html>

