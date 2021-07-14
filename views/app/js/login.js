function goLogin(){
	var connect, form, response, result, user, pass, sesion;
	user = __('user_login').value;
	pass = __('pass_login').value;
	sesion = __('session_login').checked ? true : false;

	form= 'user=' + user + '&pass=' + pass + '&session=' + sesion;
	/**XMLHttpRequest -> es una interfaz empleada para realizar peticiones HTTP y HTTPS a servidores Web. Para los datos transferidos se usa cualquier codificación basada en texto, incluyendo: texto plano, XML, JSON, HTML y codificaciones particulares específicas. La interfaz se implementa como una clase de la que una aplicación cliente puede generar tantas instancias como necesite para manejar el diálogo con el servidor.**/

	//marcamos un elemento que decimos si existe marcamos una instancia y si no existe marcamos otra instacia
	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	/**
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
				result += '<strong>Registro exitoso </strong> ';
				result += '</div>';
				
				//redireccione
				
				__('_AJAX_LOGIN_').innerHTML = result;
				location.reload();
			} else{
				//ERROR: los datos son incorrectos
				
				__('_AJAX_LOGIN_').innerHTML = connect.responseText;
			}
		}else if (connect.readyState != 4) {
			//Procesando
			result = '<div class="alert alert-dismissible alert-warning">';
			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			result += '<strong>Procesando...</strong>';
			result += '</div>';
			__('_AJAX_LOGIN_').innerHTML = result;
		}
	}
	connect.open('POST','ajax.php?mode=login',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	
}
function runScriptLogin(e){
	if(e.keyCode == 13){
		goLogin();
	}
}