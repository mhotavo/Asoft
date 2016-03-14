<?php 

$id= isset($_GET['id']) ? $_GET['id'] : null;  #Identificacion del desplazado

if (isset($_SESSION['app_id']) and !empty($id) ) {
require('core/models/class.Discapacidades.php');

$discapacidades = new Discapacidades();

#Comprobamos si ya se registro el desplazamiento
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM desplazado_discapacidad WHERE DOCUMENTO_DESPLAZADO='$id' LIMIT 1 ");
	  	if($db->rows($sql) > 0) {
	  		$mode='edit';
	  	} else {
	  		$mode='add';
	  	}

switch (isset($mode) ?  $mode : null ) {

	case 'add':
		if ($_POST) {
			$discapacidades->Add(); 
			  header('location: ?view=proteccionespecial&id='.$id);
		}else {	
			include(HTML_DIR . 'app/desplazados/ingresarDiscapacidadDesplazados.php');
		}
		break;	


	case 'edit':

		if (  isset($id) and !empty($id) ) {
				if ($_POST) {
					$discapacidades->edit();
					header('location: ?view=proteccionespecial&id='.$id);
				} else {
					include(HTML_DIR . 'app/desplazados/ingresarDiscapacidadDesplazados.php');
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
 

 