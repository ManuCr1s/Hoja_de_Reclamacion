let tipo_usuario = document.getElementById('agraviado'),
    tipo_usuario_2= document.getElementById('tercero'),
    one=document.getElementById('one'),
    two=document.getElementById('two'),
    servicio = document.getElementById('unidad'),
    area = document.getElementById('area');;
tipo_usuario.addEventListener('click',function(){
   let nombre = document.getElementById('bloque');
       nombre.setAttribute("class","d-none");
       one.innerHTML='4. DETALLE DEL RECLAMO';
       two.innerHTML='5. AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO';
});
tipo_usuario_2.addEventListener('click',function(){
    let nombre = document.getElementById('bloque');
       nombre.setAttribute("class","form-row mt-3 p-2");
       one.innerHTML='5. DETALLE DEL RECLAMO';
       two.innerHTML='6. AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO';
 });
servicio.addEventListener('change',function(){
    let selectedOption = this.options[servicio.selectedIndex].value;
    $.ajax({
        url:'scripts/load_area.php',
        method:'POST',
        data:{"id":selectedOption},
    })
    .done(function(respuesta) {
        if(respuesta == 0){
            $("#area").attr("disabled",true);
            $("#area").html(respuesta);
        }else{
            $("#area").attr("disabled",false);
            $("#area").html(respuesta);
        }
    })
}); 