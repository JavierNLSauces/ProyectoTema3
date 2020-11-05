<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 25 - Nerea Nuevo Pascual</title>
        <style>
            .error{
                color: red;
                font-weight: bold;
            }
            
            legend{
                color: black;
                font-weight: bold;
            }
            input{
                padding: 5px;
                border-radius: 10px;
            }
            .obligatorio input{
                background-color: #ccc;
            }
        </style>
    </head>
    <body>
        <h1>ENCUESTA DE SATISFACCION PERSONAL</h1>
        <?php
        /**
         * @author: Javier Nieto
         * @since: 22/10/2020
         */

        setlocale(LC_ALL, "es_ES.utf-8");
        date_default_timezone_set("Europe/Madrid");
        //Declaramos la variables
        require_once '../core/201020libreriaValidacion.php'; //Importamos la librería 
        $entradaOK = true;
        
        $arrayErrores = [ //Recoge los errores del formulario
            'nombreyApellidos' => null,
            
            'valoracionCurso' => null,  
            
            'fechaNacimiento' => null,
            
            'estadoAnimo' => null,
            
            'sentimiento' => null,
            
            'valoracionVacaciones' => null
            
        ]; 
        
        $arrayFormulario = [ //Recoge los datos del formulario
            'nombreyApellidos' => null,
            
            'valoracionCurso' => null,  
            
            'fechaNacimiento' => null,
            
            'estadoAnimo' => null,
            
            'sentimiento' => null,
            
            'valoracionVacaciones' => null
            
        ];  


        if (isset($_POST['enviar'])) { //Código que se ejecuta cuando se envía el formulario
            
            #OBLIGATORIOS
            $arrayErrores['nombreyApellidos'] = validacionFormularios::comprobarAlfabetico($_POST['nombreyApellidos'], 50, 1, 1);  //Máximo, mínimo y opcionalidad

            $arrayErrores['valoracionCurso'] = validacionFormularios::comprobarEntero($_POST['valoracionCurso'], 10, 1, 1); //Máximo, mínimo y opcionalidad
            $arrayErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_POST['fechaNacimiento'], date('Y/m/d'), "01/01/1900", 1); //Opcionalidad
            $arrayErrores['estadoAnimo'] = validacionFormularios::comprobarAlfaNumerico($_POST['estadoAnimo'], 500, 1, 1); //Máximo, mínimo y opcionalidad
            if(!isset($_POST['sentimiento'])){$arrayErrores['sentimiento'] = "Debe marcarse un valor";}
            $arrayErrores['valoracionVacaciones'] = validacionFormularios::validarElementoEnLista($_POST['valoracionVacaciones'], array("ni idea", "con la familia", "de fiesta","trabajando","estudiando DWES")); //Opciones de la lista
            
            

            
            
            foreach ($arrayErrores as $campo => $error) { //Recorre el array en busca de mensajes de error
                if ($error != null) { //Si lo encuentra vacia el campo y cambia la condiccion
                    $entradaOK = false; //Cambia la condiccion de la variable
                }
            }
        } else {
            $entradaOK = false;
        }


        if ($entradaOK) { // Si el formulario se ha rellenado correctamente
         
            #OBLIGATORIOS
            // Cargamos en el $arrayFormulario el valos de aquellos campos que se han rellenado correctamente
            
            $arrayFormulario['nombreyApellidos'] = $_POST['nombreyApellidos'];
            $arrayFormulario['valoracionCurso'] = $_POST['valoracionCurso'];

            $arrayFormulario['fechaNacimiento'] = $_POST['fechaNacimiento'];
            $arrayFormulario['estadoAnimo'] = $_POST['estadoAnimo'];
            $arrayFormulario['sentimiento'] = $_POST['sentimiento'];
            $arrayFormulario['valoracionVacaciones'] = $_POST['valoracionVacaciones'];
            

            
            // Mostramos los valores de cada campo obligatorio
            echo "<h2>INFORME DE SATISFACCION PERSONAL </h2>";
            $fechaNacimiento= new DateTime($arrayFormulario['fechaNacimiento']);
            
            echo "Hoy " . strftime("%A %e de %B %Y  a las %T <br>");
            echo "D.". $arrayFormulario['nombreyApellidos']." nacido hace ".date_diff(new DateTime(),$fechaNacimiento)->format('%Y') ." años <br>";
            echo "se siente" . $arrayFormulario['sentimiento']  . "<br>";
            echo "Valora su curso actual con un ". $arrayFormulario['valoracionCurso']." sobre 10 <br>";
            echo "Estas vacaciones las dedicará a: " . $arrayFormulario['valoracionVacaciones'] . "<br>";
            echo "y ademas opina que " . $arrayFormulario['estadoAnimo'] . "<br>";
            
            
            
        } else { //Código que se ejecuta antes de rellenar el formulario
            ?>
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                <fieldset>
                    <legend>JAVIER NIETO</legend>
                    <div class="obligatorio">
                        <label>Nombre y Apellidos: </label>
                        <input type = "text" name = "nombreyApellidos"
                               value="<?php if($arrayErrores['nombreyApellidos'] == NULL && isset($_POST['nombreyApellidos'])){ echo $_POST['nombreyApellidos'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['nombreyApellidos'] != NULL) {
                        echo $arrayErrores['nombreyApellidos']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    <br><!---------------------------- FECHA -------------------------------------------->
                    
                    <div class="obligatorio">
                        <label>Fecha de nacimiento: </label>
                        <input type = "date" name = "fechaNacimiento"
                               value="<?php if($arrayErrores['fechaNacimiento'] == NULL && isset($_POST['fechaNacimiento'])){ echo $_POST['fechaNacimiento'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['fechaNacimiento'] != NULL) {
                        echo $arrayErrores['fechaNacimiento']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    <br><!---------------------------- SELECTOR RADIO -------------------------------------------->
                    
                    <div>
                        <label>¿Como te sientes hoy?: </label><br><br>
                        <input type="radio" id="RO1" name="sentimiento" value="Muy Mal" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "Muy Mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO1">Muy mal</label>
                        <input type="radio" id="RO2" name="sentimiento" value="Mal" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "Mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO2">Mal</label><br>
                        <input type="radio" id="RO3" name="sentimiento" value="Regular" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "Regular"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO3">Regular</label><br>
                        <input type="radio" id="RO4" name="sentimiento" value="Bien" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "Bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO4">Bien</label>
                        <input type="radio" id="RO5" name="sentimiento" value="Muy Bien" <?php if(isset($_POST['sentimiento']) && $_POST['sentimiento'] == "Muy Bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                            <label for="RO5">Muy Bien</label>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['sentimiento'] != NULL) {
                        echo $arrayErrores['sentimiento']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br><!---------------------------- ENTERO -------------------------------------------->
                    
                    <div class="obligatorio">
                        <label>¿Como va el curso? (1-Muy mal - 10-Muy Bien): </label>
                        <input type = "number" name = "valoracionCurso"
                               value="<?php if($arrayErrores['valoracionCurso'] == NULL && isset($_POST['valoracionCurso'])){ echo $_POST['valoracionCurso'];} ?>"><br>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['valoracionCurso'] != NULL) {
                        echo $arrayErrores['valoracionCurso']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    <br><!---------------------------- LISTA -------------------------------------------->
                    
                    <div>
                        <label>¿Como se presentan las vacaciones de navidad? </label>
                        <select name="valoracionVacaciones">
                            <option value="ni idea" <?php if(isset($_POST['valoracionVacaciones'])){if($arrayErrores['valoracionVacaciones'] == NULL && $_POST['valoracionVacaciones'] == "ni idea"){ echo "selected";}} ?>>ni idea</option>
                            <option value="con la familia" <?php if(isset($_POST['valoracionVacaciones'])){if($arrayErrores['valoracionVacaciones'] == NULL && $_POST['valoracionVacaciones'] == "con la familia"){ echo "selected";}} ?>>con la familia</option>
                            <option value="de fiesta" <?php if(isset($_POST['valoracionVacaciones'])){if($arrayErrores['valoracionVacaciones'] == NULL && $_POST['valoracionVacaciones'] == "de fiesta"){ echo "selected";}} ?>>de fiesta</option>
                            <option value="trabajando" <?php if(isset($_POST['valoracionVacaciones'])){if($arrayErrores['valoracionVacaciones'] == NULL && $_POST['valoracionVacaciones'] == "trabajando"){ echo "selected";}} ?>>trabajando</option>
                            <option value="estudiando DWES" <?php if(isset($_POST['valoracionVacaciones'])){if($arrayErrores['valoracionVacaciones'] == NULL && $_POST['valoracionVacaciones'] == "estudiando DWES"){ echo "selected";}} ?>>estudiando DWES</option>
                        </select>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['valoracionVacaciones'] != NULL) {
                        echo $arrayErrores['valoracionVacaciones']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    
                    <div><!---------------------------- AREA DE TEXTO -------------------------------------------->
                    
                    <div>
                        <label>Describe brevemente tu estado de ánimo:</label><br>
                        <textarea name="estadoAnimo" rows="5" cols="30" placeholder="Maximo 500 caracteres" value="<?php if($arrayErrores['estadoAnimo'] == NULL && isset($_POST['estadoAnimo'])){ echo $_POST['estadoAnimo'];} ?>"></textarea>
                    </div>
                    <div class="error">
                    <?php
                    if ($arrayErrores['estadoAnimo'] != NULL) {
                        echo $arrayErrores['estadoAnimo']; //Mensaje de error que tiene el $arrayErrores
                    }
                    ?>
                    </div>
                    
                    <br> 
                        <br><input type = "submit" name = "enviar" value = "Conclusión">
                    </div>
                </fieldset>
            </form>
        <?php } ?>
    </body>
</html>