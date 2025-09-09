<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>

<?php 
//$_myvar  //valida
//$_7var    //valida
//$myvar  //valida
//$var7  //valida
//$_element1 //valida
//$house*5  //invalida
?>
<h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    $a = “ManejadorSQL”;
$b = 'MySQL’;
$c = &amp;$a;

<p>a. Ahora muestra el contenido de cada variable</p>
<p>b. Agrega al código actual las siguientes asignaciones:</p>
    <?php
$a = 'ManejadorSQL';
$b = 'MySQL';
$c = &$a;
echo  '<h4>Respuesta inciso a:</h4>';
echo '<p>Valores iniciales</p>';
echo  "a: $a </br>";
echo  "b: $b </br>";
echo  "c: $c </br>";
echo '<h4>cambio hecho del inciso b.</h4>'
    ?>
<h2>Ejercicio 3</h2>
<h2>Ejercicio 4</h2>
<h2>Ejercicio 5</h2>
<h2>Ejercicio 6</h2>
<h2>Ejercicio 7</h2>

</html>