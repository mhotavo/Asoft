<?php 

if (isset($_SESSION['app_id'])) {
require('core/models/class.Familiares.php');
$id= isset($_GET['id']) ? $_GET['id'] : null;  
$familiares = new Familiares();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

	case 'add':
		if ($_POST) {
			$familiares->Add();
		}else {	
			include(HTML_DIR . 'app/desplazados/ingresarFamiliarDesplazados.php');
		}
		break;	


	case 'edit':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0 and isset($id)) {
				if ($_POST) {
					$familiares->edit();
				} else {
					include(HTML_DIR . 'app/desplazados/ingresarFamiliarDesplazados.php');
				}
				
			}
		else{
			header('location: ?view=validardesplazados');
		}
		break;	

	case 'delete':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0) {

			$familiares->Delete();
		}
		break;
	
	default:

		header('location: ?view=validardesplazados');
		break;
}


} else {
	header('location: ?view=index');
}

 ?>
 

 