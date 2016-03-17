<?php 

if (isset($_SESSION['app_id'])) {
 
require('core/models/class.Desplazados.php');
$id= isset($_GET['id']) ? $_GET['id'] : null; 

$desplazados = new Desplazados();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

	case 'add':
		if ($_POST) {
			$desplazados->Add();
  		    header('location: ?view=listarfamiliares&mode=add&id='.$id);
		}else {	
			if (isset($id) and !empty($id) ) {
				include(HTML_DIR.'app/desplazados/ingresarDatosDesplazados.php');
			} else {
				header('location: ?view=validardesplazados');
			}
			
		}
		break;	


	case 'edit':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0 and isset($id)) {
				if ($_POST) {
					$desplazados->edit();
					header('location: ?view=listarfamiliares&mode=add&id='.$id);
				} else {
					include(HTML_DIR.'app/desplazados/ingresarDatosDesplazados.php');
				}
				
			}
		else{
			header('location: ?view=validardesplazados');
		}
		break;	

	case 'delete':
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0 and isset($id)) {

			$desplazados->Delete($id);
			header('location: ?view=listardesplazados');
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