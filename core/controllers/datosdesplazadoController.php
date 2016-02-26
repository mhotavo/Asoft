<?php 

if (isset($_SESSION['app_id'])) {
require('core/models/class.Desplazados.php');
$id= $_GET['id']; 
$desplazados = new Desplazados();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {
	case 'add':
		if ($_POST) {
			$desplazados->Add();
		}else {

		}
		break;	
	case 'edit':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0) {
				$desplazados->Edit();
				include('html/app/desplazados/ingresarDatosDesplazados.php');
		}
		else{
			header('location: ?view=validardesplazados');
		}
		break;

	case 'view':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0) {
				include('html/app/desplazados/ingresarDatosDesplazados.php');
		}
		else{
			header('location: ?view=validardesplazados');
		}
		break;	

	case 'delete':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0) {

			$desplazados->Delete();
		}
		break;
	
	default:
		header('location: ?view=validardesplazados');
		break;
}


} else {

}

 ?>