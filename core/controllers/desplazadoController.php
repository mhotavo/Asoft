<?php 
if (isset($_SESSION['app_id'])) {
require('core/models/class.Desplazado.php');

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {
	case 'add':
		# code...
		break;	
	case 'edit':
		# code...
		break;	
	case 'delete':
		# code...
		break;
	
	default:
		# code...
		break;
}


} else {
	
}

 ?>