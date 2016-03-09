<?php 

$id= isset($_GET['id']) ? $_GET['id'] : null;  #Identificacion del desplazado

if (isset($_SESSION['app_id']) and !empty($id) ) {
//require('core/models/class.Desplazamiento.php');

//$desplazamiento = new Desplazamiento();

#Comprobamos si ya se registro el desplazamiento
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM desplazados_proteccion WHERE DOCUMENTO_DESPLAZADO='$id' LIMIT 1 ");
	  	if($db->rows($sql) > 0) {
	  		$mode='edit';
	  	} else {
	  		$mode='add';
	  	}

switch (isset($mode) ?  $mode : null ) {

	case 'add':
		if ($_POST) {
			$familiares->Add();
			  header('location: ?view=listarfamiliares&id='.$id);
		}else {	
			include(HTML_DIR . 'app/desplazados/ingresarProteccionDesplazados.php');
		}
		break;	


	case 'edit':

		if (  isset($id) and !empty($id) ) {
				if ($_POST) {
					$familiares->edit();
					header('location: ?view=listarfamiliares&id='.$id);
				} else {
					$_familiaresDesplazados=familiaresDesplazados($_GET['id']); 
					//include(HTML_DIR . 'app/desplazados/ingresarProteccionDesplazados.php');
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
 

 