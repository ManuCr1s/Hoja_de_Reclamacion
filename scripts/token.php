<?php
date_default_timezone_set('America/Lima');
$date = date('l jS \of F Y h:i:s A');
$caracteres= '123456789mnbvcxzasdfghjklpoiuytrewwq';
$i = 0;
$token=""; 
$longitud_de_caracter=2;
while($i < $longitud_de_caracter){
    $token .= substr( $caracteres ,mt_rand(0,strlen($caracteres)-1),1);
    $i++;
}
$date = $date .' '. $token;