<?php  
if (isset($_SESSION['app_id'])) {
	if (isset($_GET['mode']) ?  $_GET['mode'] : null ) {
		require('core/models/class.Desplazados.php');
		$isset_id= isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id']>=1;
		$desplazados = new Desplazados();
		$desplazados->Buscar();
	} else {
		include('html/app/validarDesplazado.php');
	}




} else {
	header('location: ?view=index');
}


 ?>