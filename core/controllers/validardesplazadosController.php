<?php  
if (isset($_SESSION['app_id'])) {
	if (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

		require('core/models/class.Desplazados.php');
		$desplazados = new Desplazados();
		$desplazados->Buscar();

	} else {
		include('html/app/validarDesplazados.php');
	}
} else {
	header('location: ?view=index');
}


 ?>