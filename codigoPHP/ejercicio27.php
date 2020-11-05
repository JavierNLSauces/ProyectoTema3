<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 27 - Javier Nieto Lorenzo</title>
    </head>
    <body>
        <h1>Javier Nieto Lorenzo</h1>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 22/10/2020
         *   27. Utilizando PHP embebido en HTML realizar una página web dinámica que (xxx-Encuesta.php): (Aplicación de recogida de datos y análisis de resultados) 
                podamos utilizar para recoger las respuestas a una encuesta de varias preguntas realizada a 3-5 personas, el usuario de la página web tecleará las respuestas
                y recibirá como respuesta un resumen con algún tipo de calculo, resumen o tratamiento sobre las respuestas a al encuesta. Entre las respuestas tienen que haber, 
                respuestas textuales, respuestas si/no, fechas, números enteros, números decimales,...

        */
            require_once '../core/201020libreriaValidacion.php'; // incluyo la libreria de validacion para validar los campos de formulario
            
            define("OBLIGATORIO",1);// defino e inicializo la constante a 1
            define("OPCIONAL",0);// defino e inicializo la constante a 0
            
            $FECHA_ACTUAL=date('Y/m/d'); // defino e inicializo la variable de la fecha actual
            
            $entradaOK=true; // declaro la variable que determina si esta bien la entrada de los campos instroducidos por el usuario
            
            
            for($nFormulario=1;$nFormulario<=3;$nFormulario++){
                $aErrores[$nFormulario]=[ //declaro e inicializo el array de errores de los formularios
                    'nombre'.$nFormulario => null,
                    'dni'.$nFormulario => null,
                    'correoElectronico'.$nFormulario => null,
                    'fechaNacimiento'.$nFormulario => null,
                    'altura'.$nFormulario => null,
                    'numeroHermanos'.$nFormulario => null,
                    'estadoCivil'.$nFormulario => null,
                    'vehiculoPropio'.$nFormulario => null,
                    'lenguajesProgramacion'.$nFormulario => null
                ];

                $aRespuestas[$nFormulario]=[ // declaro e inicializo el array de las respuestas de los formularios
                    'nombre'.$nFormulario => null,
                    'dni'.$nFormulario => null,
                    'correoElectronico'.$nFormulario => null,
                    'fechaNacimiento'.$nFormulario => null,
                    'altura'.$nFormulario => null,
                    'numeroHermanos'.$nFormulario => null,
                    'estadoCivil'.$nFormulario => null,
                    'vehiculoPropio'.$nFormulario => null,
                    'lenguajesProgramacion'.$nFormulario => null
                ];
            }

            if(isset($_REQUEST["Enviar"])){// compruebo que el usuario le ha dado a al boton de enviar y valido la entrada de todos los campos
                for($nFormulario=1;$nFormulario<=3;$nFormulario++){
                    $aErrores[$nFormulario]['nombre'.$nFormulario]= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'.$nFormulario], 100, 1, OBLIGATORIO); 
                    $aErrores[$nFormulario]['dni'.$nFormulario]= validacionFormularios::validarDni($_REQUEST['dni'.$nFormulario], OBLIGATORIO); 
                    $aErrores[$nFormulario]['correoElectronico'.$nFormulario]= validacionFormularios::validarEmail($_REQUEST['correoElectronico'.$nFormulario], OBLIGATORIO); 
                    $aErrores[$nFormulario]['fechaNacimiento'.$nFormulario]= validacionFormularios::validarFecha($_REQUEST['fechaNacimiento'.$nFormulario], $FECHA_ACTUAL,"1900/01/01",OBLIGATORIO); 
                    $aErrores[$nFormulario]['altura'.$nFormulario]= validacionFormularios::comprobarFloat($_REQUEST['altura'.$nFormulario], 2.5, 0.20, OBLIGATORIO); 
                    $aErrores[$nFormulario]['numeroHermanos'.$nFormulario]= validacionFormularios::comprobarEntero($_REQUEST['numeroHermanos'.$nFormulario], 20, 0, OPCIONAL); 
                    $aErrores[$nFormulario]['estadoCivil'.$nFormulario]= validacionFormularios::validarElementoEnLista($_REQUEST['estadoCivil'.$nFormulario], ['soltero','casado','divorciado','separado','viudo']); 
                    $aErrores[$nFormulario]['vehiculoPropio'.$nFormulario]= validacionFormularios::validarElementoEnLista($_REQUEST['vehiculoPropio'.$nFormulario], ['si','no']); 
                    (!isset($_REQUEST['lenguajesProgramacion'.$nFormulario])) ? $arrayErrores[$nFormulario]['lenguajesProgramacion'.$nFormulario] = "Debe marcarse un valor" : null; 
                    
                    
                }
                
                foreach($aErrores as $clave => $errores){
                    foreach ($errores as $claveError => $error) { // recorro el array de errores
                        if($error != null){ // compruebo si hay algun mensaje de error en algun campo
                            $entradaOK=false; // le doy el valor false a $entradaOK
                        }
                    }
                }
                

            }else{ // si el usuario no le ha dado al boton de enviar
                $entradaOK=false; // le doy el valor false a $entradaOK
            }

            if($entradaOK){ // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
                for($nFormulario=1;$nFormulario<=3;$nFormulario++){
                    $aRespuestas[$nFormulario]['nombre'.$nFormulario]=$_REQUEST['nombre'.$nFormulario]; 
                    $aRespuestas[$nFormulario]['dni'.$nFormulario]=$_REQUEST['dni'.$nFormulario];
                    $aRespuestas[$nFormulario]['correoElectronico'.$nFormulario]=$_REQUEST['correoElectronico'.$nFormulario]; 
                    $aRespuestas[$nFormulario]['fechaNacimiento'.$nFormulario]=new DateTime($_REQUEST['fechaNacimiento'.$nFormulario]); 
                    $aRespuestas[$nFormulario]['altura'.$nFormulario]=$_REQUEST['altura'.$nFormulario]; 
                    $aRespuestas[$nFormulario]['numeroHermanos'.$nFormulario]=$_REQUEST['numeroHermanos'.$nFormulario]; 
                    $aRespuestas[$nFormulario]['estadoCivil'.$nFormulario] = $_REQUEST['estadoCivil'.$nFormulario];
                    $aRespuestas[$nFormulario]['vehiculoPropio'.$nFormulario] = $_REQUEST['vehiculoPropio'.$nFormulario]; 
                    $aRespuestas[$nFormulario]['lenguajesProgramacion'.$nFormulario] = $_REQUEST['lenguajesProgramacion'.$nFormulario];
                    
                    
                    
                    
                    echo "<h3>Formulario: ".$nFormulario."</h3>";
                    echo "<p>Nombre y Apellidos: ".$aRespuestas[$nFormulario]['nombre'.$nFormulario]."</p>";
                    echo "<p>DNI: ".$aRespuestas[$nFormulario]['dni'.$nFormulario]."</p>";
                    echo "<p>Correo electrónico: ".$aRespuestas[$nFormulario]['correoElectronico'.$nFormulario]."</p>";
                    echo "<p>Fecha de nacimiento: ".$aRespuestas[$nFormulario]['fechaNacimiento'.$nFormulario]->format('Y-m-d')."</p>";
                    echo "<p>Fecha de nacimiento(timestamp): ".$aRespuestas[$nFormulario]['fechaNacimiento'.$nFormulario]->getTimestamp()."</p>";
                    echo "<p>Altura: ".$aRespuestas[$nFormulario]['altura'.$nFormulario]."m</p>";
                    echo "<p>Numero de hermanos: ".$aRespuestas[$nFormulario]['numeroHermanos'.$nFormulario]." hermano/s</p>";
                    echo "<p>Estado Civil: ".$aRespuestas[$nFormulario]['estadoCivil'.$nFormulario]."</p>";
                    echo "<p>Vehiculo propio: ".$aRespuestas[$nFormulario]['vehiculoPropio'.$nFormulario]."</p>";
                    $lenguajesProgramacion="";
                    echo "<p>Lenguajes de programacion: ";
                    foreach($aRespuestas[$nFormulario]['lenguajesProgramacion'.$nFormulario] as $opcion){
                        $lenguajesProgramacion.=$opcion." ";
                    }        
                    echo "$lenguajesProgramacion</p>";
                }
                
                
                
            }else{ // si hay algun campo de la entrada que este mal
                
        ?> 
        
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php 
                for($nFormulario=1;$nFormulario<=3;$nFormulario++){
            ?>
            <fieldset style="width:70%;">
                <legend>Datos personales <?php echo $nFormulario;?></legend>
                <div>
                    <label for="nombre<?php echo $nFormulario;?>">Nombre y Apellidos</label>
                    <input style="background-color:#81BEF7;width:200px;" id="nombre<?php echo $nFormulario;?>" type="text" name="nombre<?php echo $nFormulario;?>" placeholder="Introduzca su nombre" value="<?php 
                            echo (isset($_REQUEST['nombre'.$nFormulario]) && $aErrores[$nFormulario]['nombre'.$nFormulario] == null)? $_REQUEST['nombre'.$nFormulario] : null; // compruebo si hay algun error en el nombre y que le ha dado a enviar y deja el valor del nombre que esta bien introducido null{ 
                        ?>">
                    <?php
                        echo ($aErrores[$nFormulario]['nombre'.$nFormulario] != null)? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['nombre'.$nFormulario]."</span>" : null; // compruebo si hay algun error en el nombre y que le ha dado a enviar y deja el valor del nombre que esta bien introducido null{ 
                        
                    ?>
                </div>
                <div>
                    <label for="dni<?php echo $nFormulario; ?>">DNI </label>
                    <input style="background-color:#81BEF7;" id ="dni<?php echo $nFormulario; ?>" type="text" name="dni<?php echo $nFormulario; ?>" placeholder="Introduzca su dni" value="<?php
                                echo (isset($_REQUEST['dni'.$nFormulario]) && $aErrores[$nFormulario]['dni'.$nFormulario] == null)? $_REQUEST['dni'.$nFormulario] : null; // compruebo si hay algun error en el nombre y que le ha dado a enviar y deja el valor del nombre que esta bien introducido null{ 
                           ?>">
                    <?php
                        echo ($aErrores[$nFormulario]['dni'.$nFormulario] != null)? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['dni'.$nFormulario]."</span>" : null; // compruebo si hay algun error en el nombre y que le ha dado a enviar y deja el valor del nombre que esta bien introducido null{ 
                    ?>
                </div>
                <div>
                    <label for="correoElectronico<?php echo $nFormulario; ?>">Correo electónico </label>
                    <input style="background-color:#81BEF7;width:180px;" id="correoElectronico<?php echo $nFormulario; ?>" type="text" name="correoElectronico<?php echo $nFormulario; ?>" placeholder="ejemplo@email.es" value="<?php
                        echo (isset($_REQUEST['correoElectronico'.$nFormulario]) && $aErrores[$nFormulario]['correoElectronico'.$nFormulario] == null) ? $_REQUEST['correoElectronico'.$nFormulario] : null;// si el campo esta correcto mantengo su valor en el formulario
                    ?>">
                    <?php
                        echo (!is_null($aErrores[$nFormulario]['correoElectronico'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['correoElectronico'.$nFormulario]."</span>" : null; // si el campo es erroneo se muestra un menaje de error
                    ?>
                </div>
                <div>
                    <label for="fechaNacimiento<?php echo $nFormulario; ?>">Fecha de nacimiento </label>
                    <input type="date" style="background-color:#81BEF7;" id="fechaNacimiento<?php echo $nFormulario; ?>" name="fechaNacimiento<?php echo $nFormulario; ?>" max="<?php $FECHA_ACTUAL; ?>" style="background-colo:#81BEF7;"   value="<?php
                        echo (isset($_REQUEST['fechaNacimiento'.$nFormulario]) && $aErrores[$nFormulario]['fechaNacimiento'.$nFormulario] == null)? $_REQUEST['fechaNacimiento'.$nFormulario] : null;// si el campo esta correcto mantengo su valor en el formulario
                    ?>">
                    <?php
                        echo (!is_null($aErrores[$nFormulario]['fechaNacimiento'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['fechaNacimiento'.$nFormulario]."</span>" : null; // si el campo es erroneo se muestra un menaje de error
                    ?>
                </div>
                <div>
                    <label for="altura<?php echo $nFormulario; ?>">Altura en metros (0.2m - 2.5m )</label>
                    <input style="background-color:#81BEF7;width:40px;" id="altura<?php echo $nFormulario; ?>" type="text" name="altura<?php echo $nFormulario; ?>" placeholder="0.2-2.5" value="<?php
                        echo (isset($_REQUEST['altura'.$nFormulario])  && $aErrores[$nFormulario]['altura'.$nFormulario] == null) ? $_REQUEST['altura'.$nFormulario] : null;// si el campo esta correcto mantengo su valor en el formulario
                    ?>">
                    <?php
                        echo (!is_null($aErrores[$nFormulario]['altura'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['altura'.$nFormulario]."</span>" : null; /// si el campo es erroneo se muestra un menaje de error
                    ?>
                </div>
                <div>
                    <label for="numeroHermanos<?php echo $nFormulario; ?>">Numero de hermanos</label>
                    <input style="width:40px;" type="number" id="numeroHermanos<?php echo $nFormulario; ?>" name="numeroHermanos<?php echo $nFormulario; ?>" placeholder="0-20" value="<?php
                        echo (isset($_REQUEST['numeroHermanos'.$nFormulario]) && $aErrores[$nFormulario]['numeroHermanos'.$nFormulario] == null)? $_REQUEST['numeroHermanos'.$nFormulario] : null; // si el campo esta correcto mantengo su valor en el formulario
                    ?>">
                    <?php
                        echo(!is_null($aErrores[$nFormulario]['numeroHermanos'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['numeroHermanos'.$nFormulario]."</span>" : null;     // si el campo es erroneo se muestra un menaje de error
                    ?>
                </div>
                <div>
                    <label>Estado civil:</label><br>
                    <select name="estadoCivil<?php echo $nFormulario; ?>">
                        <option value="soltero" <?php echo (isset($_REQUEST["estadoCivil".$nFormulario])=="soltero")? 'selected' : null; //si el usuario lo ha pulsado lo marco como selected?> >soltero/a</option>
                        <option value="casado" <?php echo (isset($_REQUEST["estadoCivil".$nFormulario])=="casado")? 'selected' : null; //si el usuario lo ha pulsado lo marco como selected?> >casado/a</option>
                        <option value="divorciado" <?php echo (isset($_REQUEST["estadoCivil".$nFormulario])=="divorciado")? 'selected' : null; //si el usuario lo ha pulsado lo marco como selected?> >divorciado/a</option>
                        <option value="separado" <?php echo (isset($_REQUEST["estadoCivil".$nFormulario])=="separado/a")? 'selected' : null; //si el usuario lo ha pulsado lo marco como selected?> >separado/a</option>
                        <option value="viudo" <?php echo (isset($_REQUEST["estadoCivil".$nFormulario])=="viudo/a")? 'selected' : null; //si el usuario lo ha pulsado lo marco como selected?> >viudo/a</option>
                    </select>
                    
                    <?php
                        echo(!is_null($aErrores[$nFormulario]['estadoCivil'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]['estadoCivil'.$nFormulario]."</span>" : null;   // si el campo es erroneo se muestra un menaje de error
                    ?>
                </div>
                <div>
                    <p>Vehiculo propio :</p>
                    <input type="radio" id="si" name="vehiculoPropio<?php echo $nFormulario; ?>" value="si" <?php echo (isset($_REQUEST["vehiculoPropio".$nFormulario]) && $_REQUEST["vehiculoPropio".$nFormulario]=="si")? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="si">Si</label>
                    <input type="radio" id="no" name="vehiculoPropio<?php echo $nFormulario; ?>" value="no" <?php echo (isset($_REQUEST["vehiculoPropio".$nFormulario]) && $_REQUEST["vehiculoPropio".$nFormulario]=="no")? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="no">No</label>
                    
                    <?php
                        echo(!is_null($aErrores[$nFormulario]['vehiculoPropio'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]["vehiculoPropio".$nFormulario]."</span>" : null;   // si el campo es erroneo se muestra un menaje de error
                    ?><br>
                </div>
                <div>
                    <p>Lenguaje/s de programacion que hayas utilizado: </p>
                    <input type="checkbox" id="JAVA" name="lenguajesProgramacion<?php echo $nFormulario; ?>[JAVA]" value="JAVA" <?php echo (isset($_REQUEST["lenguajesProgramacion".$nFormulario]['JAVA']))? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="JAVA"> JAVA</label>
                    <input type="checkbox" id="PHP" name="lenguajesProgramacion<?php echo $nFormulario; ?>[PHP]" value="PHP" <?php echo (isset($_REQUEST["lenguajesProgramacion".$nFormulario]['PHP']))? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="PHP"> PHP</label>
                    <input type="checkbox" id="PYHTON" name="lenguajesProgramacion<?php echo $nFormulario; ?>[PYHTON]" value="PYHTON" <?php echo (isset($_REQUEST["lenguajesProgramacion".$nFormulario]['PYHTON']))? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="PYHTON"> PYTHON</label>
                    <input type="checkbox" id="C" name="lenguajesProgramacion<?php echo $nFormulario; ?>[C]" value="C" <?php echo (isset($_REQUEST["lenguajesProgramacion".$nFormulario]['C']))? 'checked' : null; //si el usuario lo ha pulsado lo marco como checked?> >
                    <label for="C"> C</label><br>
                    <?php
                        echo(!is_null($aErrores[$nFormulario]['lenguajesProgramacion'.$nFormulario])) ? "<span style='color:#FF0000'>".$aErrores[$nFormulario]["lenguajesProgramacion".$nFormulario]."</span>" : null; // si el campo es erroneo se muestra un menaje de error
                    ?>
                </div> 
                
                
            </fieldset>
            <?php
                }
            ?>
            <div style="width: 70%;justify-content:center;">
                <input style="display:block;margin-left: auto;margin-right: auto;" type="submit" value="Enviar" name="Enviar">
            </div>
        </form>
        
        <?php
            }
        ?>
    </body>
</html>

