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
                    button: "Bien",
                  }).then(function () {
                    form.trigger("reset");
                    location. reload();
                 });
            }
        })
        return false;
    })
})