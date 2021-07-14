function goReg(){
	var connect, form, response, result, user, nom, pass, pass_dos, email, tyc, ape, ced;

	form = __('nombres_reg').value;
	pass = __('pass_reg').value;
	ape = __('apellidos_reg').value;
	ced = __('cedula_reg').value;
	email = __('email_reg').value;
	user = __('user_reg').value;
	pass_dos = __('pass_reg_dos').value;
	tyc = __('tyc_reg').checked ? true : false;

	if (true == tyc) {
		if (user !='' && pass !='' && email !='' && pass_dos !='') {
			if (pass == pass_dos) {
				nom= 'nombres=' + form + '&user=' + user + '&email=' + email + '&pass=' + pass + '&ced=' + ced + '&ape=' + ape;
				/**XMLHttpRequest -> es una interfaz empleada para realizar peti ciones HTTP y HTTPS a servidores Web. Para los datos transferidos se usa cualquier codificación basada en texto, incluyendo: texto plano, XML, JSON, HTML y codificaciones particulares específicas. La interfaz se implementa como una clase de la que una aplicación cliente puede generar tantas instancias como necesite para manejar el diálogo con el servidor.**/

				//marcamos un elemento que decimos si existe marcamos una instancia y si no existe marcamos otra instacia
				connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				/**f
					Almacena una función (o el nombre de una función ) que se llamará automáticamente cada vez que cambia la propiedad readyState**/
				connect.onreadystatechange = function(){
					/**readyState ->Ejerce en el estado de la XMLHttpRequest . Cambia de 0 a 4:
					0: solicitud no inicializado
					1 : conexión del servidor estableció
					2 : solicitud recibida
					3: Solicitud de procesamiento
					4 : solicitar acabado y la respuesta está listo**/
					//and status is ->	200: "OK", 404: Page not found
					if (connect.readyState == 4 && connect.status == 200) {
						//Convierte (parsea) un argumento de tipo cadena y devuelve un entero de la base especificada.
						//responseText -> obtener los datos de respuesta como una cadena
						if(connect.responseText == 1){
							//conectado con exito
							result = '<div class="alert alert-dismissible alert-success">';
							result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							result += '<strong>Bienvenido </strong> ';
							result += '</div>';

							//redireccione

							__('_AJAX_REG_').innerHTML = result;
							location.reload();
						} else{
							//ERROR: los datos son incorrectos

							__('_AJAX_REG_').innerHTML = connect.responseText;
						}
					}else if (connect.readyState != 4) {
						//Procesando
						result = '<div class="alert alert-dismissible alert-warning">';
						result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						result += '<strong>Procesando...</strong>';
						result += '</div>';
						__('_AJAX_REG_').innerHTML = result;
					}
				}
				connect.open('POST','ajax.php?mode=reg',true);
				connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				connect.send(nom);
			}else{
				result = '<div class="alert alert-dismissible alert-danger">';
				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
				result += '<strong>Las contraseñas no coinciden.</strong>';
				result += '</div>';
				__('_AJAX_REG_').innerHTML = result;
			}

		}else{
			result = '<div class="alert alert-dismissible alert-danger">';
			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			result += '<strong>Todos los datos deben estar llenos.</strong>';
			result += '</div>';
			__('_AJAX_REG_').innerHTML = result;
		}
	}else{
		result = '<div class="alert alert-dismissible alert-danger">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<strong>Los términos y condiciones deben de ser aceptados.</strong>';
		result += '</div>';
		__('_AJAX_REG_').innerHTML = result;
	}




}
function runScriptReg(e){
	if(e.keyCode == 13){
		goReg();
	}
}
