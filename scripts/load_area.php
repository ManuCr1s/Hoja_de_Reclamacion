<?php
require_once "conexion.php";
$id = $_POST["id"];
$area = mysqli_query($conexion, "SELECT id,nombre_area FROM area WHERE id_unidad = '{$id}'");
$respuesta_area = mysqli_fetch_all($area);
for($i = 0; $i < count($respuesta_area); $i++){
    echo '<option value='.$respuesta_area[$i][0].'>'.$respuesta_area[$i][1].'</option>';
}
