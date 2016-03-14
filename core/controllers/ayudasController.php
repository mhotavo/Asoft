<?php 

$id= isset($_GET['id']) ? $_GET['id'] : null;  #Identificacion del desplazado

if (isset($_SESSION['app_id']) and !empty($id) ) {
require('core/models/class.Ayudas.php');

$ayudas = new Ayudas();

#Comprobamos si ya se registro el desplazamiento
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM desplazados_ayudasrecibidas WHERE DOCUMENTO_DESPLAZADO='$id' LIMIT 1 ");
	  	if($db->rows($sql) > 0) {
	  		$mode='edit';
	  	} else {
	  		$mode='add';
	  	}

switch (isset($mode) ?  $mode : null ) {

	case 'add':
		if ($_POST) {
			$ayudas->Add();
			  header('location: ?view=discapacidad&id='.$id);
		}else {	
			include(HTML_DIR . 'app/desplazados/ingresarAyudasRecibidasDesplazados.php');
		}
		break;	


	case 'edit':

		if (  isset($id) and !empty($id) ) {
				if ($_POST) {
					$ayudas->edit();
					header('location: ?view=discapacidad&id='.$id);
				} else {
					include(HTML_DIR . 'app/desplazados/ingresarAyudasRecibidasDesplazados.php');
				}
				
			}
		else{
			header('location: ?view=validardesplazados');
		}
		break;	

	
	default:

		header('location: ?view=validardesplazados');
		break;
}

    $db->liberar($sql);
    $db->close();


} else {
	header('location: ?view=index');
}

 ?>
 

 