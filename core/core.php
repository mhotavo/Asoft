<?php 

session_start();

#Constantes de la conexion
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'asoft');

#Constantes de la APP
	define('HTML_DIR', 'html/');
	define('APP_TITLE', 'Asoft');
	define('APP_URL', 'http://localhost/Asoft/');
	define('APPCOPY', 'Copyright &copy; '.date("Y", time()).' Asoft.' );

require('vendor/autoload.php');
require('core/models/classConexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
$users=users();

 ?>