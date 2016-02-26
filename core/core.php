
<?php 

session_start();

#Constantes de la conexion
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'asoft');


#Constantes de PHPMailer
	define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
	define('PHPMAILER_USER','public@ocrend.com');
	define('PHPMAILER_PASS','Prinick2016');
	define('PHPMAILER_PORT',465);

#Constantes de la APP
	define('HTML_DIR', 'html/');
	define('APP_TITLE', 'Asoft');
	define('APP_URL', 'http://localhost/GitHub/Asoft/');
	define('APPCOPY', 'Copyright &copy; '.date("Y", time()).' Asoft.' );

require('vendor/autoload.php');
require('core/models/classConexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/Desplazados.php');
require('core/bin/functions/lostpassTemplate.php');
$users=users();
$_desplazados=desplazados();
 ?>
