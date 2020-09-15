<?php
require_once "conexion.php";
$unidad = mysqli_query($conexion, "SELECT nombre FROM unidad");
$respuesta = mysqli_fetch_all($unidad);
$j = 0;
echo '<option value="">SELECCIONE</option>';
for($i = 0; $i < count($respuesta); $i++){
    $j = $i + 1;
    echo '<option value='.$j.'>'.$respuesta[$i][0].'</option>';
}
