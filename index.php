<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="container-fluid paper position-relative d-flex flex-column shadow rounded-top p-3 border border-dark">
                <form method="post" class="p-4" id="form">
                    <div class="form-row d-flex justify-content-between px-5">
                        <div class="form-group">
                            <img src="img/hrdac.png" class="border border-secondary rounded-lg p-1 d-none d-md-block" width="300" height="100">
                        </div>
                        <div class="form-group">
                            <img src="img/susalud.png" class="border border-secondary rounded-lg p-1 d-none d-md-block" width="300" height="100">
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                            <h1 class="text-center">LIBRO DE RECLAMACIONES</h1>
                    </div>
                    <div class="form-row p-3">
                            <div class="form-group col-12 py-2 bg-primary">
                                <h6 class="text-white px-3">1. ESTABLECIMIENTO</h6>
                            </div>
                        
                            <div class="form-group col-md-8 col-sm-12 p-3">
                                    <h6 class="font-weight-bold">IPRESS</h6>
                                    <input class="form-control" type="text" value= "HOSPITAL REGIONAL DANIEL ALCIDES CARRION - PASCO" disabled>
                                    <h6 class="font-weight-bold">Direccion</h6>
                                    <input class="form-control" type="text" value= "Av. Daniel Alcides Carrión 520 Cerro De Pasco -Yanacancha." disabled>
                                    <h6 class="font-weight-bold">Fecha</h6>
                                    <input class="form-control" type="date" name="fecha">
                                    <span data-key="fecha" class="label label-danger"></span>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 bg-warning p-2">
                                    <h6 class="text-center">HOJA DE RECLAMACIÓN EN SALUD</h6>
                            </div>
                        
                    </div>
                    <div class="form-row p-3">
                            <div class="form-group py-2 col-12 bg-danger">
                                <h6 class="text-white px-3">2. ¿QUIEN PRESENTA EL RECLAMO?</h6>
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="usuario" id="agraviado" value="agraviado" checked>
                                        <label class="form-check-label" for="inlineRadio1">AGRAVIADO</label>
                                    </div>
                            </div>
                            <div class="form-group-col-md-3 col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="usuario" id="tercero" value="tercero">
                                        <label class="form-check-label" for="inlineRadio1">TERCERO LEGITIMADO (Persona que acompaña al agraviado)</label>
                                    </div>
                            </div>        
                            
                    </div>
                    <div class="form-row mt-3 p-3">
                        <div class="form-group py-2 col-12 bg-dark"> 
                            <h6 class="text-white px-3">3. IDENTIFICACION DEL USUARIO</h6>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                                    <div class="form-group">                                
                                        <h6 class="font-weight-bold">Documento de identidad</h6>
                                    </div>
                                    <div class="form-row d-flex justify-content-center my-3">
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento" id="dni" value="dni" checked>
                                                <label class="form-check-label" for="inlineRadio1">DNI</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento" id="ce" value="ce">
                                                <label class="form-check-label" for="inlineRadio1">CE</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-4">
                                                <input class="form-check-input" type="radio" name="documento" id="pasaporte" value="pasaporte">
                                                <label class="form-check-label" for="inlineRadio1">PASAPORTE</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento" id="ruc" value="ruc">
                                                <label class="form-check-label" for="inlineRadio1">RUC</label>
                                            </div>
                                    </div>
                                    <h6 class="font-weight-bold">Nombre o Razón Social</h6>
                                    <input class="form-control" type="text" name="nombre">
                                    <h6 class="font-weight-bold">Domicilio</h6>
                                    <input class="form-control" type="text" name="domicilio">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                                    <h6 class="font-weight-bold">N° Documento</h6>
                                    <input class="form-control my-2" type="text" name="numero_documento">
                                    <h6 class="font-weight-bold">Email</h6>
                                    <input class="form-control" type="text" name="email">
                                    <h6 class="font-weight-bold">Telefono</h6>
                                    <input class="form-control" type="text" name="telefono" maxlength="9">
                        </div>
                    </div>

                    <div class="d-none" id="bloque">
                            <div class="form-group py-2 col-12 bg-success">
                                <h6 class="text-white px-3">4. IDENTIFICACION DE QUIEN PRESENTA EL RECLAMO (En caso del ser el usuario afectado no es necesario su llenado)</h6>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                    <div class="form-group">                                
                                        <h6 class="font-weight-bold">Documento de identidad</h6>
                                    </div>
                                    <div class="form-row d-flex justify-content-center my-3">
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento_tercero" value="dni" checked>
                                                <label class="form-check-label" for="inlineRadio1">DNI</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento_tercero" value="ce">
                                                <label class="form-check-label" for="inlineRadio1">CE</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-4">
                                                <input class="form-check-input" type="radio" name="documento_tercero" value="pasaporte">
                                                <label class="form-check-label" for="inlineRadio1">PASAPORTE</label>
                                            </div>
                                            <div class="form-check form-check-inline col-sm-12 col-md-2">
                                                <input class="form-check-input" type="radio" name="documento_tercero" value="ruc">
                                                <label class="form-check-label" for="inlineRadio1">RUC</label>
                                            </div>
                                    </div>
                                    <h6 class="font-weight-bold">Nombre o Razón Social</h6>
                                    <input class="form-control" type="text" name="nombre_tercero">
                                    <h6 class="font-weight-bold">Domicilio</h6>
                                    <input class="form-control" type="text" name="domicilio_tercero">
                        </div>
                            <div class="form-group col-md-6 col-sm-12">
                                        <h6 class="font-weight-bold ">N° Documento</h6>
                                        <input class="form-control my-2" type="text" name="numero_documento_tercero">
                                        <h6 class="font-weight-bold">Email</h6>
                                        <input class="form-control" type="text" name="email_tercero">
                                        <h6 class="font-weight-bold">Telefono</h6>
                                        <input class="form-control" type="text" name="telefono_tercero"  maxlength="9">
                            </div>
                    </div>

                    <div class="form-row mt-3 p-2">
                            <div class="form-group py-2 col-12 mt-3 bg-info">
                                <h6 class="text-white px-3" id='one'>4. DETALLE DEL RECLAMO</h6>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                    <h6 class="font-weight-bold">Unidad - Servicio</h6>
                                    <select class="form-control" id="unidad" name="unidad">
                                            <option value="SELECCIONE" selected>SELECCIONE</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                    <h6 class="font-weight-bold">Area</h6>
                                    <select class="form-control" id="area" name="area">
                                    </select>
                            </div>
                            <div class="form-group col-12">
                                    <h6 class="font-weight-bold">Detalle de los hechos</h6>
                                    <textarea class="form-control" id="detalles" name="detalles"></textarea>
                            </div>
                    </div>

                    <div class="form-row mt-3 p-2">
                            <div class="form-group py-2 col-12 bg-secondary">
                                <h6 class="text-white px-3" id='two'>5. AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO</h6>
                            </div>
                            <div class="form-group col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="autorizo" id="inlineRadio1" value="si">
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="autorizo" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">NO</label>
                                    </div>
                            </div>
                    </div>

                    <div class="form-row position-absolute pie mx-auto border border-dark">
                                <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-2">
                                    <img src="scripts/capcha.php" width="200" height="70" class="capcha">
                                    <a class="btn btn-danger p-2 mx-3" id="btn">
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 p-2 mt-3 d-flex flex-column">
                                    <h6 class="font-weight-bold text-center text-white">INGRESE CODIGO</h6>
                                    <input type="text" class="form-control w-50 mx-auto" name="captcha">
                                </div>
                                <div class="form-group col-12 d-flex mt-3 justify-content-center">
                                    <button class="btn btn-warning w-25" type="submit">ENVIAR</button>
                                </div>
                    </div>  
                </form>
        </div>
    <script src="js/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/load_servicio.js"></script>
    <script src="js/refresh.js"></script>
    <script src="js/verificacion.js"></script>
    <script src="js/send.js"></script>
</body>
</html>