<?php
    require_once '../core/libreriaCalculadora.php'; // incluyo la libreria Libreriacalculadora.php
    
    // con $_POST['numero1'] cojo el numero1 del formulario y con $_POST['numero2'] cojo el numero2
    // con $_REQUEST['numero1'] cojo el numero1 del formulario y con $_REQUEST['numero2'] cojo el numero2
    
    echo "<h2>Utilizando la libreria libreriaCalculadora.php y 'POST'</h2>";
    echo "<p>Suma de ".$_POST['numero1']. " y " . $_POST['numero2'] . " utilizando funcion suma() = ".suma($_POST['numero1'],$_POST['numero2']) . "</p>";
    echo "<p>Resta de ".$_POST['numero1']. " y " . $_POST['numero2'] . " utilizando funcion resta() = ".resta($_POST['numero1'],$_POST['numero2']) . "</p>";
    echo "<p>Multiplicacion de ".$_POST['numero1']. " y " . $_POST['numero2'] . "utilizando funcion multiplicacion() = ".multiplicacion($_POST['numero1'],$_POST['numero2']) . "</p>";
    echo "<p>Division de ".$_POST['numero1']. " y " . $_POST['numero2'] . " utilizando funcion division() = ".division($_POST['numero1'],$_POST['numero2']) . "</p>";
    
    echo "<h2>Utilizando la libreria libreriaCalculadora.php y 'REQUEST'</h2>";
    echo "<p>Suma de ".$_REQUEST['numero1']. " y " . $_REQUEST['numero2'] . " utilizando funcion suma() = ".suma($_REQUEST['numero1'],$_REQUEST['numero2']) . "</p>";
    echo "<p>Resta de ".$_REQUEST['numero1']. " y " . $_REQUEST['numero2'] . " utilizando funcion resta() = ".resta($_REQUEST['numero1'],$_REQUEST['numero2']) . "</p>";
    echo "<p>Multiplicacion de ".$_REQUEST['numero1']. " y " . $_REQUEST['numero2'] . "utilizando funcion multiplicacion() = ".multiplicacion($_REQUEST['numero1'],$_REQUEST['numero2']) . "</p>";
    echo "<p>Division de ".$_REQUEST['numero1']. " y " . $_REQUEST['numero2'] . " utilizando funcion division() = ".division($_REQUEST['numero1'],$_REQUEST['numero2']) . "</p>";
?>

