<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 06/10/2020
         *   02. Inicializar y mostrar una variable heredoc
        */ 
            // Declaracion y asignacion de variable heredoc
            // Heredoc es una forma de representar una cadena la cual tiene delimitadores(<<<JNL, JNL;)
            // dentro de los delimitadores escribimos una cadena y se comporta como si tuviera comillas.
            $heredoc= <<<JNL
                Esta es la primera linea de la prueba de variable heredoc.<br>
                Esta es la segunda linea de la prueba de variable heredoc.
                JNL;
            
            echo "<p>Muestra por pantalla de la variable heredoc : $heredoc </p>";
        ?> 
    </body>
</html>

