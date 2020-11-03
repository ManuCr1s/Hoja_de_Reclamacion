$(document).ready(function(){
    let form = $("#form");
    form.submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'scripts/validation.php',
            method:'POST',
            data: form.serialize(),
            dataType:'json'
        }).done(function(r){
            if(!r.response){
                for(let k in r.errors){
                    swal(r.errors[k]);
                }
            }else{
                swal({
                    title: "Formulario enviado",
                    text: "¡Satisfactoriamente!",
                    icon: "success",
                    buttons:"Descargar PDF",
                  }).then(function () {
                    $.ajax({
                        method:"POST",
                        data:form.serialize(),
                        dataType: 'native',
                        url: "scripts/imprimir.php",
                        xhrFields: {
                          responseType: 'blob'
                        }
                    }).done(function(blob){
                            console.log(blob.size);
                            var link=document.createElement('a');
                            link.href=window.URL.createObjectURL(blob);
                            link.download="Reclamo_" + new Date() + ".pdf";
                            link.click();
                            $.ajax({
                                method:"POST",
                                data:form.serialize(),
                                url: "scripts/enviar.php",
                            }).done(function(resp){
                                $.ajax({
                                    method:"POST",
                                    data:form.serialize(),
                                    url: "scripts/correo.php",
                                }).done(function(res){
                                    form.trigger("reset");
                                    location. reload();
                                });
                            });
                            
                      });
               });
            }
        })
        return false;
    })
})
