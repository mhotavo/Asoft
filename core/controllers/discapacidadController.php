<?php 

if (isset($_SESSION['app_id'])) {
require('core/models/class.Desplazados.php');
$id= isset($_GET['id']) ? $_GET['id'] : null; 
$newDoc= isset($_GET['newDoc']) ? $_GET['newDoc'] : null; 


switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

	case 'add':
			include(HTML_DIR . "app/desplazados/ingresarDiscapacidadDesplazados.php");
		break;	


	case 'edit':

		break;	

	case 'delete':
	
		break;
	
	default:

		include(HTML_DIR . "app/desplazados/ingresarDiscapacidadDesplazados.php");
		break;
}


} else {
	header('location: ?view=index');
}

 ?>