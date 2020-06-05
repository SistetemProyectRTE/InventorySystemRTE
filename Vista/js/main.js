jQuery(document).on('submit','#formlg', function(event){
event.preventDefault();

jQuery.ajax({
	url:'../Vista/login1.php',
	type: 'POST',
	dataType: 'json',
	data:$(this).serialize(),
	beforeSend:function(){
		$('.botonlg').val('Validando....');
	}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error) {
			if (respuesta.tipo=='Tecnico Logista'){
				location.href='MenuTecnicoLogistica.php';
			}else if (respuesta.tipo=='Administrador') {
				location.href='MenuAdministrador.php';
			}else if (respuesta.tipo=='Aprendiz') {
				location.href='MenuAprendiz.php';
			}

			}else{
			$('.error') .slideDown('slow');
			setTimeout(function(){
				$('.error') .slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Seción');

		}
	})
	.fail(function(resp){
		console.log(resp.responseText) 
	})
	.always(function(){
		console.log("complete");
	});
});		