<?php
$preciol = $_POST['preciol'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = ($preciol+$precio2+$precio3)/3;
echo "<br/>
DATOS RECIBIDOS";
echo "<br/>
Precio producto establecimiento 1: ". $preciol. " dolares";
echo "<br/>
Precio producto establecimiento 2: ". $precio2. " dolares";
echo "<br/>
Precio producto establecimiento 2: ". $precio3. " dolares <br/>";
echo "<br/>
El precio medio del producto es de ". $media. " dolares";
?>