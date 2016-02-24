<?php 
if (isset($_SESSION['app_id'])) {

	
	switch (isset($_GET['tab'])) {
		case 'datos':
			include('html/app/desplazados/ingresarDatosDesplazados.php');
			break;
		
		default:
			include('html/app/desplazados.php');
			break;
	}


} else{
	header('location: ?view=index');
}



 ?>