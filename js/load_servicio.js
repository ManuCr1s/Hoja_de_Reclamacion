$(document).ready(function(){
    $.ajax({
		url: '/paper/scripts/load_servicio.php',
		type: 'POST'
	}).done(function(resp){
        $('#unidad').html(resp);
    })
})
