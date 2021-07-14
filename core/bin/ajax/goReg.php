<?php
$db = new Conexion();
$pass = Encrypt($_POST['pass']);
$user = $db->real_escape_string($_POST['user']);
$cedula = $db->real_escape_string($_POST['ced']);
$apellido = $db->real_escape_string($_POST['ape']);
$nombres = $db->real_escape_string($_POST['nombres']);
$email = $db->real_escape_string($_POST['email']);
$categorias = 3;
$area = 15;

$sql = $db->query("SELECT user FROM users WHERE user='$user' OR email='$email' LIMIT 1;");
if ($db->rows($sql) == 0) {

	$keyreg = md5(time());
	$link = APP_URL.'?view=activar&key='.$keyreg;
	$mail = new PHPMailer;
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'quoted-printable';
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = PHPMAILER_host;  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = PHPMAILER_user;                 // SMTP username
	$mail->Password = PHPMAILER_pass;                           // SMTP password
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  	);	                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to
	$mail->setFrom(PHPMAILER_user, APP_TITLE);
	$mail->addAddress($email, $user);     // Add a recipient
	/**$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name**/
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Activación de tu cuenta';
	$mail->Body    = EmailTemplate($user, $link);
	$mail->AltBody = 'Hola '. $user . ' para activar tu cuenta accede al siguiente enlace: '. $link ;

	if(!$mail->send()) {
		$html = '<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>ERROR:</strong>'.$mail->ErrorInfo.'
		</div>';
	} else {
		//$fecha_reg = date('d/m/Y', time());
	    $db->query("INSERT INTO users (user,nombres,apellidos,cedula,email,pass,keyreg,categorias,area) VALUES ('$user','$nombres','$apellido','$cedula','$email','$pass','$keyreg','$categorias','$area');");
		$sql_2 = $db->query("SELECT MAX(id) AS id FROM users;");
		$registro = $db->recorrer($sql_2);
		$_SESSION['app_id'] = $registro[0];
		$db->liberar($sql_2);
		$html = 1;
	}


}else{
	$uss = $db->recorrer($sql);
	$usuario = $uss[0];
	if (strtolower($user) == strtolower($usuario)) {
		$html = '<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>ERROR:</strong> El usuario ya existe.
		</div>';
	}else{
		$html = '<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>ERROR:</strong> El email ya existe.
		</div>';
	}
}
$db->liberar($sql);
$db->close();
echo $html;
?>
