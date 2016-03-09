<?php 

if (isset($_SESSION['app_id'])) {
require('core/models/class.Desplazados.php');
$id= isset($_GET['id']) ? $_GET['id'] : null; 
$newDoc= isset($_GET['newDoc']) ? $_GET['newDoc'] : null; 
$desplazados = new Desplazados();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

	case 'add':
		if ($_POST) {
			$desplazados->Add();
  		   header('location: ?view=listarfamiliares&mode=add&id='.$id);
		}else {	
			if (isset($id)) {
				header('location: ?view=datosdesplazado&mode=add');
			} else {
				include(HTML_DIR.'app/desplazados/ingresarDatosDesplazados.php');
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
		if (!empty($_desplazados) and $_desplazados[$id]['Documento']>0) {

			$desplazados->Delete();
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