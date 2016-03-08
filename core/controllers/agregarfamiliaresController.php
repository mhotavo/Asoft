<?php 

if (isset($_SESSION['app_id'])) {
require('core/models/class.Familiares.php');
$id= isset($_GET['id']) ? $_GET['id'] : null;  #Identificacion del desplazado
$idFam= isset($_GET['familiar']) ? $_GET['familiar'] : null;  #Identificacion del Familiar del desplazado

$familiares = new Familiares();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

	case 'add':
		if ($_POST) {
			$familiares->Add();
			  header('location: ?view=listarfamiliares&id='.$id);
		}else {	
			include(HTML_DIR . 'app/desplazados/ingresarFamiliarDesplazados.php');
		}
		break;	


	case 'edit':
		if (  isset($id) and isset($idFam) and !empty($idFam) and !empty($id) ) {
				if ($_POST) {
					$familiares->edit();
				} else {
					$_familiaresDesplazados=familiaresDesplazados($_GET['id']); 
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
 

 