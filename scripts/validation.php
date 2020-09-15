<?php
session_start();
$validaciones=[];
$estado='danger';
require_once "conexion.php";
function validacion_fecha($fecha){
    for($i = 0; $i <= 2; $i++){
        $valores[$i] = explode('-',$fecha);
    }
    return checkdate(intval($valores[1]),intval($valores[0]),intval($valores[2]));
}
if(!empty($_POST['captcha'])){

    if(!($_POST['captcha'] === $_SESSION['codigo'])){
        $validaciones = ['captcha' => 'Ingrese Captcha Nuevamente'];
    }else{

        if(empty($_POST['fecha'])){
            $validaciones = ['fecha' => 'Ingrese Fecha'];
        }else{

            if(!validacion_fecha($_POST['fecha'])){
                $validaciones = ['fecha' => 'Ingrese un fecha Valida'];
            }else{

                if(empty($_POST['nombre'])){
                    $validaciones = ['nombre' => 'Ingrese nombre'];
                }else{
                    if(!preg_match("/^[a-zA-ZñÑ\s]+$/",$_POST['nombre'])){
                        $validaciones = ['nombre' => 'Ingrese un Nombre Valido'];
                    }
                }
                
                if(empty($_POST['domicilio'])){
                    $validaciones = ['domicilio' => 'Ingrese domicilio'];
                }

                if(empty($_POST['numero_documento'])){
                    $validaciones = ['numero_documento' => 'Ingrese numero de documento'];
                }else{
                    switch($_POST['documento']){
                        case 'dni':
                            if((strlen($_POST['numero_documento']) == 8) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento'] )){
                            }else{
                                $validaciones = ['numero_documento' => 'Ingrese DNI valido'];   
                            }
                        break;
                        case 'ce':
                            if((strlen($_POST['numero_documento']) == 12) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento'] )){
                            } else{
                                $validaciones = ['numero_documento' => 'Ingrese Carnet de Extranjeria valido'];
                            }
                        break;
                        case 'pasaporte':
                            if((strlen($_POST['numero_documento']) == 12) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento'] )){
                            } else{
                                $validaciones = ['numero_documento' => 'Ingrese Pasaporte valido'];
                            }
                        break;
                        case 'ruc':
                            if((strlen($_POST['numero_documento']) == 11) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento'] )){
                            } else{
                                $validaciones = ['numero_documento' => 'Ingrese RUC valido'];
                            }
                        break;
                    }
                }

                if(empty($_POST['email'])){
                    $validaciones = ['email' => 'Ingrese su email'];
                }else{
                    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        $validaciones = ['email' => 'Ingrese un email valido'];
                    }
                }    
                
                if(empty($_POST['telefono'])){
                    $validaciones = ['telefono' => 'Ingrese su telefono'];
                }else{
                    if(!preg_match("/^[0-9\s]+$/",$_POST['telefono'])){
                        $validaciones = ['telefono' => 'Ingrese un telefono valido'];
                    }
                }
             
                if( $_POST['usuario'] === 'tercero'){

                    if(empty($_POST['nombre_tercero'])){
                        $validaciones = ['nombre_tercero' => 'Ingrese nombre del tercero'];
                    }else{
                        if(!preg_match("/^[a-zA-ZñÑ\s]+$/",$_POST['nombre'])){
                            $validaciones = ['nombre_tercero' => 'Ingrese un Nombre Valido'];
                        }
                    }
                    
                    if(empty($_POST['domicilio_tercero'])){
                        $validaciones = ['domicilio_tercero' => 'Ingrese domicilio del tercero'];
                    }
        
                    if(empty($_POST['numero_documento_tercero'])){
                        $validaciones = ['numero_documento_tercero' => 'Ingrese numero de documento del Tercero'];
                    }else{
                        switch($_POST['documento_tercero']){
                            case 'dni':
                                if((strlen($_POST['numero_documento_tercero']) == 8) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento_tercero'] )){
                                }else{
                                    $validaciones = ['numero_documento_tercero' => 'Ingrese DNI valido'];   
                                }
                            break;
                            case 'ce':
                                if((strlen($_POST['numero_documento_tercero']) == 12) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento_tercero'] )){
                                } else{
                                    $validaciones = ['numero_documento_tercero' => 'Ingrese Carnet de Extranjeria valido'];
                                }
                            break;
                            case 'pasaporte':
                                if((strlen($_POST['numero_documento_tercero']) == 12) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento_tercero'] )){
                                } else{
                                    $validaciones = ['numero_documento_tercero' => 'Ingrese Pasaporte valido'];
                                }
                            break;
                            case 'ruc':
                                if((strlen($_POST['numero_documento_tercero']) == 11) && preg_match("/^[0-9\s]+$/",$_POST['numero_documento_tercero'] )){
                                } else{
                                    $validaciones = ['numero_documento_tercero' => 'Ingrese RUC valido'];
                                }
                            break;
                        }
                    }
        
                    if(empty($_POST['email_tercero'])){
                        $validaciones = ['email_tercero' => 'Ingrese email del Tercero'];
                    }else{
                        if(!filter_var($_POST['email_tercero'], FILTER_VALIDATE_EMAIL)){
                            $validaciones = ['email_tercero' => 'Ingrese un email valido'];
                        }
                    }

                    if(empty($_POST['telefono_tercero'])){
                        $validaciones = ['telefono_tercero' => 'Ingrese el telefono del tercero'];
                    }else{
                        if(!preg_match("/^[0-9\s]+$/",$_POST['telefono'])){
                            $validaciones = ['telefono_tercero' => 'Ingrese un telefono valido'];
                        }
                    }

                

                 } 

                 if($_POST['unidad'] == 0){
                        $validaciones = ['unidad' => 'Ingrese Unidad'];
                 }else{
                     if(empty( $_POST['detalles'])){
                        $validaciones = ['detalles' => 'Ingrese detalle del suceso'];
                     }
                 }



            }

        }
    }
}else{
    $validaciones = ['captcha' => 'Ingrese Captcha'];
}
if(count($validaciones) == 0){
    
        $usuario = mysqli_query($conexion, "INSERT INTO usuario(tipo_documento,nombre_usuario,domicilio_usuario,numero_documento,email,telefono) 
            VALUES('{$_POST['documento']}', '{$_POST['nombre']}','{$_POST['domicilio']}','{$_POST['numero_documento']}','{$_POST['email']}','{$_POST['telefono']}')");
        if(!empty($_POST['numero_documento_tercero'])){
            $tercero = mysqli_query($conexion, "INSERT INTO tercero(numero_tercero ,tipo_tercero,nombre_tercero,domicilio_tercero,email_tercero,telefono_tercero) 
            VALUES('{$_POST['numero_documento_tercero']}', '{$_POST['documento_tercero']}','{$_POST['nombre_tercero']}','{$_POST['domicilio_tercero']}','{$_POST['email_tercero']}','{$_POST['telefono_tercero']}')");
            if(empty($_POST['area'])){
                $reclamo = mysqli_query($conexion, "INSERT INTO reclamo(id_unidad,id_usuario,id_tercero,fecha,detalles,estado)
                VALUES('{$_POST['unidad']}','{$_POST['numero_documento']}','{$_POST['numero_documento_tercero']}','{$_POST['fecha']}','{$_POST['detalles']}','{$estado}')");
            }else{
                $reclamo = mysqli_query($conexion, "INSERT INTO reclamo(id_unidad,id_area,id_usuario,id_tercero,fecha,detalles,estado)
                VALUES('{$_POST['unidad']}','{$_POST['area']}','{$_POST['numero_documento']}','{$_POST['numero_documento_tercero']}','{$_POST['fecha']}','{$_POST['detalles']}','{$estado}')");
            }
        }else{
            if(empty($_POST['area'])){
                $reclamo = mysqli_query($conexion, "INSERT INTO reclamo(id_unidad,id_usuario,fecha,detalles,estado)
                VALUES('{$_POST['unidad']}','{$_POST['numero_documento']}','{$_POST['fecha']}','{$_POST['detalles']}','{$estado}')");
            }else{
                $reclamo = mysqli_query($conexion, "INSERT INTO reclamo(id_unidad,id_area,id_usuario,fecha,detalles,estado)
                VALUES('{$_POST['unidad']}','{$_POST['area']}','{$_POST['numero_documento']}','{$_POST['fecha']}','{$_POST['detalles']}','{$estado}')");
            }
        }

        
        echo json_encode([  
            'response' => 'Se guardo Correctamente'
        ]);
            
    }else{
        echo json_encode([
            'response' => count($validaciones) === 0,
            'errors' => $validaciones
        ]);
    }