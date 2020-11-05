<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 05/10/2020
         *   01. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump)
        */ 
            // Declaracion y asignacion de variables
            $cadena="cadena de prueba";
            $entero=3;
            $decimal=13.3;
            $logico=true;
            
            // Mostrar variables con echo
            // puede recibir varios parametros
            echo "<h2>Variables mostradas con echo </h2>";
            echo "<p>Variable de tipo string: $cadena </p>";
            echo "<p>Variable de tipo int: $entero </p>";
            echo "<p>Variable de tipo float $decimal </p>";
            echo "<p>Variable de tipo bool $logico </p>";
            echo "<br>";
            
            // Mostrar variables con print
            // print solo puede recibir 1 parametro
            print "<h2>Variables mostradas  con print </h2>";
            print "<p>Variable de tipo string: $cadena </p>";
            print "<p>Variable de tipo int: $entero </p>";
            print "<p>Variable de tipo float $decimal </p>";
            print "<p>Variable de tipo bool $logico </p>";
            print "<br>";
            
            // Mostrar variables con printf
            // printf() nos muestra strings formateados
            // %s -> El argumento se trata y se presenta como una cadena.
            // %d -> El argumento se trata como un número entero y se presenta como un número decimal (con signo).
            // %f -> El argumento se trata como un flotante y se presenta como un número de punto flotante (consciente de la configuración regional).
            printf("<h2>Variables mostradas  con printf </h2>");
            printf("<p>Variable de tipo string: %s </p>",$cadena);
            printf("<p>Variable de tipo int: %d </p>",$entero);
            printf("<p>Variable de tipo float: %f </p>",$decimal);
            printf("<p>Variable de tipo bool: $logico </p>");
            printf("<br>");
            
            // Mostrar variables con print_r -> muestra información sobre una variable de una manera que los humanos puedan leer.
            // Si el parametro return esta a true, delvuelve la informacion en vez de mostrarla.
            // por defecto return esta a false
            print_r("<h2>Variables mostradas  con print_r </h2>");
            print_r("<p>Variable de tipo string: $cadena </p>");
            print_r("<p>Variable de tipo int: $entero </p>");
            print_r("<p>Variable de tipo float: $decimal </p>");
            print_r("<p>Variable de tipo bool: $logico </p>");
            print_r("<br>");
            
            // Mostrar variables con var_dump
            // Muestra informacion sobre la variable
            var_dump("<h2>Variables mostradas  con var_dump </h2>");
            var_dump("<p>Variable de tipo string: $cadena </p>");
            var_dump("<p>Variable de tipo int: $entero </p>");
            var_dump("<p>Variable de tipo float: $decimal </p>");
            var_dump("<p>Variable de tipo bool: $logico </p>");
            var_dump("<br>");
        ?> 
    </body>
</html>

