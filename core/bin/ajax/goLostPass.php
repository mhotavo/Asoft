<?php 

	$db= new Conexion;
	$email= $db -> real_escape_string($_POST['email']);
	$sql= $db -> query("SELECT ID, USER FROM usuarios WHERE EMAIL='$email' LIMIT 1;");
	if ($db->rows($sql)>0) {
		$data= $db->recorrer($sql);
		$id=$data[0];
		$user=$data[1];
		$keypass=md5(time());
		$newpass=strtoupper(substr(sha1(time()),0,8));
		$link = APP_URL.'?view=lostpass&key='.$keypass;

		$mail = new PHPMailer;
		$mail->CharSet = "UTF-8";
		$mail->Encoding = "quoted-printable";
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = PHPMAILER_USER;                 // SMTP username
		$mail->Password = PHPMAILER_PASS;                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		  );
		$mail->Port = PHPMAILER_PORT;                                    // TCP port to connect to
		$mail->setFrom(PHPMAILER_USER, APP_TITLE); //Quien manda el correo?
		$mail->addAddress($email, $user);     // A quien le llega
		$mail->isHTML(true);    // Set email format to HTML
		$mail->Subject = 'Recuperar contraseña perdida';
		$mail->Body    = LostpassTemplate($user,$link);
		$mail->AltBody = 'Hola ' . $user . ' para recuperar tu contraseña debes ir a este enlace: ' . $link . ' , si no has solicitado un cambio de contraseña no necesitas hacer nada.';
		if(!$mail->send()) {
		    $HTML = '<div class="alert alert-dismissible alert-danger">
		    <button type="button" class="close" data-dismiss="alert">x</button>
		    <strong>Error:</strong> ' . $mail->ErrorInfo . ' </div>';
		} else {
		
			$db -> query("UPDATE usuarios SET KEYPASS='$keypass', NEWPASS='$newpass' WHERE ID='$id';   ");
			$HTML=1;
		  }

	} else {

		$HTML='<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">x</button>
				  <strong>Error:</strong> <p> El email solicitado no existe en el sistema. </p>
			  </div>';

	}


	$db -> liberar($sql);
	$db -> close();

     echo $HTML;
 ?>