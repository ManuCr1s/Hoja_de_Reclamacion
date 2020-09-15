<?php
session_start();
$longitud_de_caracter = 6;
$caracteres= '123456789mnbvcxzasdfghjklpoiuytrewwq';
$i = 0;
$captcha=""; 
while($i < $longitud_de_caracter){
    $captcha .= substr( $caracteres ,mt_rand(0,strlen($caracteres)-1),1);
    $i++;
}
$_SESSION['codigo'] = $captcha;
$fuente=realpath('Heebo-Bold.ttf');
$captchaimage = imagecreate(200,70);
$fondo_captcha = imagecolorallocate($captchaimage, 255,255,255);
$color = imagecolorallocate($captchaimage, rand(0,200), rand(0,200), rand(0,200));
imagettftext($captchaimage, 30, 10, 40, 60, $color, $fuente, $_SESSION['codigo']);
header('Content-Type: image/png');
imagepng($captchaimage);
imagedestroy($captchaimage);