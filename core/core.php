
<?php 

session_start();

#Constantes de la conexion FE5C3EE9
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
	define('APP_URL', 'http://localhost/Asoft/');
	define('APPCOPY', 'Copyright &copy; '.date("Y", time()).' Asoft.' );

require('vendor/autoload.php');
require('core/models/classConexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/Desplazados.php');
require('core/bin/functions/lostpassTemplate.php');
require('core/bin/functions/familiaresDesplazados.php'); #Se define funcion en controlador familiares
require('core/bin/functions/ayudasRecibidasDesplazados.php');
require('core/bin/functions/Departamentos.php');
require('core/bin/functions/municipios.php');
require('core/bin/functions/discapacidadDesplazados.php');
require('core/bin/functions/desplazamiento.php');
require('core/bin/functions/economiaDesplazados.php');
require('core/bin/functions/estabilizacionDesplazados.php');
require('core/bin/functions/proteccionDesplazados.php');
require('core/bin/functions/proteccionEspecialDesplazados.php');
require('core/bin/functions/reparacionDesplazados.php');
require('core/bin/functions/viviendaDesplazados.php');
require('core/bin/functions/pueblosIndigenas.php');

$users=users();
$_desplazados=desplazados();
$_municipios=Municipios();
$_ayudas=ayudasDesplazados();
$_departamentos=Departamentos();
$_desplazamientos=Desplazamiento();
$_discapacidades=Discapacidad();
$_economias=EconomiaDesplazados();
$_estabilizaciones=Estabilizacion();
$_protecciones=Proteccion();
$_especiales=ProteccionEspecial();
$_reparaciones=Reparaciones();
$_viviendas=Viviendas();
$_pueblosIndigenas=PueblosIndigenas();

 ?>
